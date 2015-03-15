
var image = new Array();
var output_image = new Array();
var html;


function do_lossless(size , predictor)
{
	for (i=0;i<size;i++) 
	{
		 image[i]=new Array();

		 for (j=0;j<size;j++) 
		 {
		    image[i][j]= Math.floor((Math.random() * 100));
	 	 }
	}

	lossless_encode(size , predictor);

	html = '<div class="container" style="width: '+input_length*100+'px;"><table class="table table-bordered" style="color : #BD3613;"><caption><h2>Input Image</h2></caption><tbody>';

	var input_length = image.length;
    var output_length = output_image.length;

	for (var i = 0; i < input_length; i++)
    {
		html +='<tr>';

		for (var j = 0; j < input_length; j++) 
		{
			html +='<td align="center"><strong>'+image[i][j]+'</strong></td>';
		}

		html +='</tr>';
	}
   
    html += '</tbody></table></div> <br>';

    html += '<div class="container" style="width: '+output_length*100+'px;"><table class="table table-bordered" style="color : #BD3613;"><caption><h2>Output Image</h2></caption><tbody>';

    for (var i = 0; i < output_length; i++)
    {
		html +='<tr>';

		for (var j = 0; j < output_length; j++) 
		{
			html +='<td align="center"><strong>'+output_image[i][j]+'</strong></td>';
		}

		html +='</tr>';
	}

	html += '</tbody></table></div> <br>';

    return html;
}



function lossless_encode(size , predictor)
{
	var a , b , c , new_value;	

    for(var x=0 ; x < size ; x= x+2 )
	{
		output_image[x/2] = new Array();	
		for(var y=0 ; y < size ; y= y+2 )
		{
			a = image[x+1][y];
			b = image[x][y+1];
			c = image[x][y];
			
			new_value = apply_predictor(a , b , c , predictor);
			output_image[x/2][y/2] = new_value;
		}
	}

	console.log(output_image);
}


function apply_predictor(a , b , c , p_type)
{
	switch(p_type)
		{	
			case '1':
				return a;				
			case '2':
				return b;				
			case '3':				
				return c;
			case '4':				
				return a+b-c;				
			case '5':				
				return a+((b-c)/2);
			case '6':				
				return b+((a-c)/2);
			case '7':				
				return (a+b)/2;											
		}		
}