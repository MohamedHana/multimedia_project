

function draw_dictionary(dictionary)
{
	var length = dictionary.length;
	html = '<div class="container" style="width: 680px;"><table style="color : #BD3613; font-family: "Times New Roman", Times, serif;" class="table table-hover"><caption><h3>The Dictionary</h3></caption><thead><tr><th>Code</th><th>String</th></tr></thead><tbody>';		

	for (var i = 0; i < length; i++) 
	{
		html += '<tr><td>'+dictionary[i][0]+'</td><td>'+dictionary[i][1]+'</td></tr>'; 
	}

	html += '</tbody></table></div>';

	return html;
}


function check_existance(s_and_c , dictionary)
{
	var length = dictionary.length;

	for (var i = 0; i < length; i++) 
	{
		if(s_and_c == dictionary[i][1])	
		{
			return true;
		}
	}

	return false;
}



function get_s_code(s , dictionary)
{
	var length = dictionary.length;

	for (var i = 0; i < length; i++) 
	{
		if(s == dictionary[i][1])	
		{
			return dictionary[i][0];
		}
	}
}

