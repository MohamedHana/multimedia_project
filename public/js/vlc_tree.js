var svg = d3.select("#show_panel_labels").append('svg');

    svg.append("marker")  
	    .attr("id", 'triangle')
	    .attr("viewBox", "0 0 10 10")
	    .attr("refX", 0)
	    .attr("refY", 5)
	    .attr("markerWidth", 7)
	    .attr("markerHeight", 8)
	    .attr("orient", "auto")
	    .append("svg:path")
	    .attr("d", "M 0 0 L 10 5 L 0 10 z");


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
        .attr('stroke' , 'white')
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
