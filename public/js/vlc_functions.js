function draw_tree(data)
{  		
	$('#show_panel_labels').append('<div align="center" style="color: green;"><h2><strong>VLC Tree Construction</strong></h2></div>');
    var svg = d3.select("#show_panel_labels").append('svg').attr("height" , ((100*data.length)/2)+50);

    svg.append("marker")  
	    .attr("id", 'triangle')	    
	    .attr("viewBox", "0 0 10 10")
	    .attr("refX", 0)
	    .attr("refY", 5)
	    .attr("markerWidth", 7)
	    .attr("markerHeight", 8)
	    .attr("orient", "auto")
	    .append("svg:path")
	    .attr("d", "M 0 0 L 10 5 L 0 10 z")
	    .style("fill" , "#8B4513");


    svg.selectAll('circle')    
        .data(data)
        .enter()
        .append('circle')        
        .attr('id' , function(d){ return d.id})
        .attr('cx' , function(d){ return d.x_pos;})
        .attr('cy' , function(d){ return d.y_pos;})
        .attr('r' , 20);
	    
        
    svg.selectAll('line')    
        .data(data)
        .enter()
        .append('line')
        .attr('x1' , function(d){return d.arrow[0];})
        .attr('y1' , function(d){return d.arrow[1];})
        .attr('x2' , function(d){return d.arrow[2];})
        .attr('y2' , function(d){return d.arrow[3];})
        .attr('marker-end' , 'url(#triangle)')
        .attr('stroke' , '#8B4513')
        .attr('stroke-width' , 2)
        .attr('text' , function(d){return d.arrow[4];});
        
  
    
    svg.selectAll('text')    
        .data(data)
        .enter()
        .append('text')
        .attr('x' , function(d){return d.value_location[0];})
        .attr('y' , function(d){return d.value_location[1];})
        .attr('font-size' , '15px')
        .attr('fill' , 'white')
        .text(function(d){return d.value;});

        
    svg.selectAll('anything')        
        .data(data)        
        .enter()
        .append('text')
        .attr('x' , function(d){return d.text_location[0];})
        .attr('y' , function(d){return d.text_location[1];})
        .attr('font-size' , '15px')
        .attr('fill' , 'white')
        .text(function(d){return d.text;});
        
        
    svg.selectAll('any')        
        .data(data)        
        .enter()
        .append('text')
        .attr('x' , function(d){return d.arrow_text_location[0];})
        .attr('y' , function(d){return d.arrow_text_location[1];})
        .attr('font-size' , '15px')
        .attr('fill' , 'white')
        .text(function(d){return d.arrow[4];});
}	



function draw_table(symbols , symbol_count , symbol_code)            
{
	var html;

	html = '<div class="container" style="width: 680px;"><table style="color : green; font-family: "Times New Roman", Times, serif;" class="table table-hover"><thead><tr><th>Symbol</th><th>Count</th><th>Probability</th><th># Of Bits</th></tr></thead><tbody>';

	for (var i = 0; i < symbols.length; i++) 
	{
		html += '<tr><td>'+symbols[i]+'</td><td>'+symbol_count[i]+'</td><td>'+symbol_code[i]+'</td><td>'+symbol_code[i].length+'</td></tr>'; 			
	}

	html += '</tbody></table></div>';

	return html;

}





function sort_symbols_and_counts(symbols , symbol_count)
{
	var length = symbols.length;
	var temp1 ,temp2;

	for (var i=1 ; i<length ; i++)
	{
		for (var k=i ; k > 0 && symbol_count[k] > symbol_count[k-1] ; k--) 
		{
			temp1 = symbol_count[k];
			symbol_count[k] = symbol_count[k-1];
			symbol_count[k-1] = temp1;

			temp2 = symbols[k];
			symbols[k] = symbols[k-1];
			symbols[k-1] = temp2;
		}
        
	}        
}



function create_nodes_array(symbols , symbol_count)
{
    var no_of_nodes = (2*symbols.length) -1;
	var nodes_array = [];
	var row = [];
	var left_index = 0;
	var right_index = 0;
	var node_id = 0;
	var x_pos = 0;
	var y_pos = 50;
	var type = 'root';
	var level = 1;	
	var left_arrow_label = '0';
	var right_arrow_label = '1';
	
	for(var i=0 ; i < no_of_nodes ; i++)
	{
		if(i%2 == 0)
		{
			if(i==0)
			{
				 nodes_array[i]={"node_id": node_id , "value": get_value(symbol_count,right_index) , 
				 				 "value_location":[192 , y_pos],
			                     "text": get_text(symbols,right_index) ,
			                     "text_location":[225 , y_pos],
			                     "parent_id": node_id-2 ,
			                     "x_pos": 200 , "y_pos": y_pos , "type": type , "level": level,
			                     "arrow" : [0 , 0 , 0 , 0, ''],
			                     "arrow_text_location":[0,0]};
			     level++;                				 			                     	                   
		   	     right_index++;
		   	     y_pos = y_pos + 100;
			}
			else
			{
				 type = 'right_node';
				 x_pos = nodes_array[node_id-2].x_pos + 50;				 
				 nodes_array[i]={"node_id": node_id , "value": get_value(symbol_count,right_index) , 
				 				 "value_location":[x_pos-6 , y_pos+2],
			                     "text": get_text(symbols,right_index) , 
			                     "text_location":[x_pos+30 , y_pos],
			                     "parent_id": node_id-2 ,
			                     "x_pos": x_pos , "y_pos": y_pos , "type": type , "level": level,
			                     "arrow" : [nodes_array[node_id-2].x_pos , nodes_array[node_id-2].y_pos+20 , x_pos-10 , y_pos-30 , right_arrow_label],
			                     "arrow_text_location":[x_pos-18 , y_pos-50]};
			     right_index++;                
			     level++;
			     y_pos = y_pos + 100;			   			     
			}			
			                		    
		}
		else
		{
			type = 'left_node';				
			x_pos = nodes_array[node_id-1].x_pos - 50;		
			nodes_array[i]={"node_id": node_id, "value": symbol_count[left_index] , 
							"value_location":[x_pos-8 , y_pos+2],
		                    "text": '('+symbols[left_index]+')' , 
		                    "text_location":[x_pos-45 , y_pos],	
		                    "parent_id": node_id-1 , 
		                    "x_pos": x_pos , "y_pos": y_pos , "type": type , "level": level,
		                    "arrow" : [nodes_array[node_id-1].x_pos , nodes_array[node_id-1].y_pos+20 , x_pos+10 , y_pos-30 , left_arrow_label],
		                    "arrow_text_location":[x_pos+15 , y_pos-50]};
		    left_index++;       		    
		}		
		node_id++;		
	}

	return nodes_array;
}




function get_text(symbols , index)
{
	var text = '(';
	var length = symbols.length;

	for(var i=index ; i<length ; i++)
	{
		text += symbols[i];

		if(i != length-1)
		{
			text += ' , ';
		}
	}

	text += ')';		

	return text;
}


function get_value(symbol_count , index)
{
	var count = 0;
	var length = symbol_count.length;

	for(var i=index ; i<length ; i++)
	{
		count += symbol_count[i];
	}

	return count;
}
