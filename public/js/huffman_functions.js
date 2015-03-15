
var symbols = [];
var symbol_count = [];
var sorted_symbols_list = [];
var html;
var parent_name = 1;


var working_list ;
var last_index ;
var pre_last_index ;
var last_node ;
var pre_last_node;	
var merge_node;	

var nodes_database = [];

function create_draw_sorted_list(message)
{
	var length = message.length;	
	var count = 1;	

	for (var i = 0; i < length; i++) 
	{
		//check that the current character not taken before 
        if(symbols.indexOf(message[i]) <= -1)
        {
            //get the number of occurance for the current character
            for(var x=i+1 ; x<length ; x++)
            {
                //increase count by 1 if found matched symbol
                if(message[i] == message[x])
                {
                    count++;    
                }
            }
            
            //insert symbol and it's count into the arrays
            symbols.push(message[i]);
            symbol_count.push(count);            
            
            //reset count
            count = 1;
        }		
	}

	sort_symbols_and_counts(symbols , symbol_count);

    generate_sorted_symbols_list();

    draw_sorted_symbols_list();
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



function generate_sorted_symbols_list()
{	
	for (var i = 0; i < symbols.length; i++) 
	{
		sorted_symbols_list.push([symbols[i] , symbol_count[i]]);	
	}	
}


function draw_sorted_symbols_list()
{
	html = '<div align="center"><h1 style="color:green;"><strong>The Sorted Symbols List</strong></h1></div>';
	html += '<div class="container" style="width: 200px;"><table style="color : green; font-family: "Times New Roman", Times, serif;" class="table table-hover"><thead><tr><th>Symbols</th><th>Count</th></tr></thead><tbody>';

	for (var i = 0; i < sorted_symbols_list.length; i++) 
	{
		html += '<tr><td>'+sorted_symbols_list[i][0]+'</td><td>'+sorted_symbols_list[i][1]+'</td></tr>'; 			
	}

	html += '</tbody></table></div>';

	$('#show_panel_labels').html(html);
	$('#show').slideDown(1500);    
}


function clear_all()
{	
	 parent_name = 1;	
	 symbols = [];
	 symbol_count = [];
	 symbol_code = [];
	 sorted_symbols_list = [];
	 html = '';
     working_list =[];
	 last_index =0;
	 pre_last_index =0;
	 last_node =[];
	 pre_last_node = [];	
	 merge_node = [];	
}




function apply_huffman_encode()
{	
	working_list = sorted_symbols_list;

	while(true)
	{
		//modifiy the working variables
		modifiy_working_variables();

		//create the parent node 
		merge_node = create_parent_node(parent_name , last_node , pre_last_node);
		parent_name++;		

		//add the new merge node to the working list and maintain the order of the list 
		insert_merge_node(merge_node);

		//draw the table of current symbols 
		draw_current_symbols_table(last_node , pre_last_node);	

		//create the subtree and draw it 
		generate_huffman_subtree(merge_node , last_node , pre_last_node);

		//delete the two least symbols from the working list 
		delete_last_symbols();
		

		//stopping condition
		if(working_list.length == 1)
		{
			break;
		}		
	}

	console.log(nodes_database);
}



function generate_huffman_subtree(merge_node , last_node , pre_last_node)
{	
	update_nodes_database(merge_node , last_node , pre_last_node);

	//find another better logic !!!
	//generate_tree_structure(nodes_database);
}


/*function generate_tree_structure(nodes_database)
{
	var length = nodes_database.length;
	var tree_data;

	if(nodes_database.length % 3 == 0)
	{
		if(nodes_database.length == 3)
		{
			var parent = {name: nodes_database[nodes_database.length-3].name , value: nodes_database[nodes_database.length-3].value};
			var rchild = {name: nodes_database[nodes_database.length-2].name , value: nodes_database[nodes_database.length-2].value};
			var lchild = {name: nodes_database[nodes_database.length-1].name , value: nodes_database[nodes_database.length-1].value};

			parent.children.push(rchild);
			parent.children.push(lchild);

			tree_data = parent;
		}
		else
		{
			for (var i = 0; i < length; i++) 
			{
					
			}
		}
		

	}
	else
	{

	}
	for (var i = 0; i < length; i++) 
	{
		if(nodes_database[i].parent_id == 0)		
	}

	for (var i = 0; i < length; i++) 
	{
		
	}
}*/

function update_nodes_database(merge_node , last_node , pre_last_node)
{	
	if(nodes_database.length == 0)
	{
		var parent_obj = {id: 1 , name: merge_node[0] , value: merge_node[1] , parent_id: 0 };
		var right_node_obj = {id: 2 , name: pre_last_node[0] , value: pre_last_node[1] , parent_id: 1};
		var left_node_obj = {id: 3 , name: last_node[0] , value: last_node[1] , parent_id: 1};
		

		nodes_database.push(parent_obj);
		nodes_database.push(right_node_obj);
		nodes_database.push(left_node_obj);		
	}
	else
	{
		var left_check = false;
		var right_check = false;
		var left_index;
		var right_index;	    

		var parent_obj = {id: nodes_database.length+1 , name: merge_node[0] , value: merge_node[1] , parent_id: 0};
		nodes_database.push(parent_obj);

		for (var i = 0; i < nodes_database.length; i++) 
		{
			if(last_node[0] == nodes_database[i].name)	
			{
				left_check = true;
				left_index = i;
			}

			if(pre_last_node[0] == nodes_database[i].name)
			{
				right_check = true;
				right_index = i;
			}
		}


		if(left_check == true)
		{
			nodes_database[left_index].parent_id = parent_obj.id;
		}
		else
		{
			nodes_database.push({id: parent_obj.id+1 , name: last_node[0] , value: last_node[1] , parent_id: parent_obj.id});
		}

		if(right_check == true)
		{
			nodes_database[right_index].parent_id = parent_obj.id;
		}
		else
		{
			nodes_database.push({id: nodes_database[nodes_database.length-1].id+1 , name: pre_last_node[0] , value: pre_last_node[1] , parent_id: parent_obj.id});
		}
		
	}
}
function modifiy_working_variables()
{

	 last_index = working_list.length-1;
	 pre_last_index = last_index-1;
	 last_node = working_list[last_index];
	 pre_last_node = working_list[pre_last_index];
}


function insert_merge_node(merge_node)
{	
	
	if(working_list.length == 0)
	{
		working_list.push(merge_node);		
	}	
	else if(merge_node[1] <= working_list[working_list.length-1][1])
	{		
		working_list.push(merge_node);		
	}
	else
	{
		for (var i = working_list.length-1 ; i >= 0 ; i--)
	    {
			if(merge_node[1] <= working_list[i][1])	
			{
				working_list.splice(i+1 , 0 , merge_node);
				break;
			}

			if(i == 0)
			{
				working_list.splice(0 , 0 , merge_node);
			}
		}	
	}
}


function delete_last_symbols()
{
	working_list.pop();
	working_list.pop();
}


function create_parent_node(parent_name , last_node , pre_last_node)
{
	var name = 'p'+parent_name;
	var array = [name , last_node[1]+pre_last_node[1]];	

	return array;
}


function draw_current_symbols_table(last_node , pre_last_node)
{
	var table = '<div class="container" style="width: 200px;"><table style="color : green; font-family: "Times New Roman", Times, serif;" class="table table-hover"><thead><tr><th>Symbols</th><th>Count</th></tr></thead><tbody>';
	table += '<tr><td>'+pre_last_node[0]+'</td><td>'+pre_last_node[1]+'</td></tr>';	
	table += '<tr><td>'+last_node[0]+'</td><td>'+last_node[1]+'</td></tr>';	
	table += '</tbody></table></div>';

	$('#show_panel_labels').append(table);
}