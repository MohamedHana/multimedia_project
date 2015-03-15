
	var every_character = [];
	var every_character_count = [];
	var probabilty = [];
	var chars_range = [];
	var new_low = [];
	var new_range = [];
	var new_high = [];
	var code = [];
	var code_decimal;
	var html;


function input_characters(init_chars , message)
{
	chars_range.push(0.0);
	var length = init_chars.length;
	var count = 1;
	var range = 0.0;

	for (var i=0 ; i<length ; i++) 
	{
		if($.inArray(init_chars[i], every_character) < 0)
		{
			for (var j = i+1 ; j < length ; j++) {

				if(init_chars[i] == init_chars[j])
				{
					count++;
				}
			};

			every_character.push(init_chars[i]);
			every_character_count.push(count);

			range = range + (count/length);
			chars_range.push(range);

			probabilty.push(count/length);

			count = 1;
		}
	}

	chars_range.pop();
	chars_range.push(1.0);
 
    html = '<div class="container" style="width: 680px;"><table style="color : #BD3613; font-family: "Times New Roman", Times, serif;" class="table table-hover"><caption><h3>Probability distribution of symbols</h3></caption><thead><tr><th>Symbol</th><th>Count</th><th>Probability</th><th>Range</th></tr></thead><tbody>';

	for (var i = 0; i < every_character.length ; i++) {
		html += '<tr><td>'+every_character[i]+'</td><td>'+every_character_count[i]+'</td><td>'+probabilty[i]+'</td><td><strong>[</strong> '+chars_range[i]+' <strong>,</strong> '+chars_range[i+1]+' <strong>)</strong></td></tr>';
	}
	html += '</tbody></table></div>';
	html +='<br><br>';

	get_new_low_high_range(message);	
	generate_code(new_low[new_low.length-1] , new_high[new_high.length-1]);

	html +='<br><br>';
	html += '<div align="center" style="color : #BD3613;"><h1>Code</h1><h3> ['+code+']</h3></div>';

	return html;
}




function get_new_low_high_range(word)
{

	var length = word.length;		
	var low = 0.0;
	var high = 1.0;
	var range = 1.0;
	var old_low , old_high;

	html +='<div class="container" style="width: 680px;"><table style="color : #BD3613;" class="table table-hover"><caption><h3>New low, high, and range generated</h3></caption><thead><tr><th>Symbol</th><th>Low</th><th>High</th><th>Range</th></tr></thead><tbody>';

	for (var i = 0; i < length; i++)
	{
		var symbol = word[i];
		var index = every_character.indexOf(symbol);
		
		old_low = chars_range[index];
		old_high = chars_range[index+1];

		high = low + (range*old_high);
		low = low + (range*old_low);

		range = high-low;	

		new_low.push(low);
		new_high.push(high);
		new_range.push(range);

		html += '<tr><td>'+word[i]+'</td><td>'+new_low[i]+'</td><td>'+new_high[i]+'</td><td>'+new_range[i]+'</td></tr>';	
	}

	html += '</tbody></table></div>';

}



function value(code)
{
	var power = -1;
	var val = 0.0;

	for (var i = 0; i < code.length; i++) {
		val = val + (code[i] * Math.pow(2.0,power));
	    power--;	    
	}

	return val;
}




function generate_code(a , b)
{		
	 var index=0;
	 
	 while(true)
	 {			
		 if(a <= value(code) && value(code) < b)
		 {			
			 break;
		 }
		 
		 if(value(code) < a)
		 {
			 code.push(1); 
		 }				 
		 
		 if(value(code) > b)
		 {							 
		     code.pop(index);			    		 
	         code.push(0);				 				 					 					 
		 }
		 
		 index++;				 
	 }			 			
}
