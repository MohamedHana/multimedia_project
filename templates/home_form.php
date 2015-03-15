<div class="body-inner">
	            <!-- Header start -->
	            <header id="header" class="navbar-fixed-top main-nav" role="banner">
		            <div class="container">
			            <div class="row">
				            <div class="col-md-12">
					            <!--/ Top info start -->
					            <div class="top-info">
						            <ul class="pull-right">
							            <li><i class="fa fa-phone"></i> Call Me: (+20) 01020-442-063</li>
							            <li><i class="fa fa-envelope"></i> mohamed.hana0@gmail.com</li>
							            <!-- Social links -->
							            <li class="social-icon">
								            <a id="tooltip1" data-toggle="tooltip" data-placement="top" title="Twitter" href="https://twitter.com/mohamedhana4">
									            <i class="fa fa-twitter"></i>
								            </a>
								            <a id="tooltip2" data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/MakeItCodey">
									            <i class="fa fa-facebook"></i>
								            </a>
								            <a id="tooltip3" href="https://plus.google.com/u/0/118170713163175233371/" data-toggle="tooltip" data-placement="top" title="Google+">
									            <i class="fa fa-google-plus"></i>
								            </a>
								            <a id="tooltip4" href="#" data-toggle="tooltip" data-placement="top" title="Dribble">
									            <i class="fa fa-dribbble"></i>
								            </a>
							            </li><!-- Social links end-->
						            </ul>
					            </div><!--/ Top info end -->    			
					            
					<nav class="collapse navbar-collapse clearfix" role="navigation">
						<ul class="nav navbar-nav navbar-center">
							<li class="dropdown">
	                       		<a href="#" class="dropdown-toggle" id="run_length_btn" data-toggle="dropdown">Run Length <i class="fa fa-caret-down"></i></a>
								<ul id="run_length_desc" class="dropdown-menu">
		                            <p>Memoryless Source : an information source that is independently distributed. Namely, the value of the current symbol does not depend on the values of the previously appeared symbols.</p>
		                            <p>Run-Length Coding (RLC) : exploits memory present in the information source.</p>
		                            <p>Rationale for RLC : if the information source has the property that symbols tend to form continuous groups, then such symbol and the length of the group can be coded.</p>
		                        </ul>
	                       	</li>
	                       	<li class="dropdown">
	                       	    <a href="#" id="variable_run_length_btn" class="dropdown-toggle" data-toggle="dropdown">VLC <i class="fa fa-caret-down"></i></a>
	                           	<ul id="variable_run_length_desc" class="dropdown-menu">
	                                <p>Shannon-Fano Algorithm (Top-Down approach)</p>
	                                <p>Sort the symbols according to the frequency count of their occurrences.</p>
	                                <p>Recursively divide the symbols into two parts, each with approximately the same number of counts, until all parts contain only one symbol.</p>
	                            </ul>
                            </li>
	                        <li class="dropdown">
	                            <a href="#" id="huffman_btn" class="dropdown-toggle"  data-toggle="dropdown">Huffman <i class="fa fa-caret-down"></i></a>
	                            <ul id="huffman_desc"class="dropdown-menu">
	                                <p>Huffman Coding Algorithm (Bottom-Up approach)</p>
	                                <p>Initialization : Put all symbols on a list sorted according to their frequency counts.</p>
	                                <p>Repeat until the list has only one symbol left :<br><strong>1-</strong> From the list pick two symbols with the lowest frequency counts.  Form a Huffman subtree that has these two symbols as child nodes and create a parent node.<br>
                                                                                           <strong>2-</strong> Assign the sum of the children’s frequency counts to the parent and insert it into the list such that the order is maintained.<br>
                                                                                           <strong>3-</strong> Delete the children from the list.</p>
	                                <p>Assign a codeword for each leaf based on the path from the root.</p>                                                                        
	                            </ul>
	                        </li>
	                       	<li class="dropdown">
	                       		<a href="#" class="dropdown-toggle" id="a_huffman_btn" data-toggle="dropdown">Adaptive Huffman <i class="fa fa-caret-down"></i></a>
								<ul id="a_huffman_desc" class="dropdown-menu">
		                            <p>Initial_code : Assign symbols with some initially agreed upon codes, without any prior knowledge of the frequency counts.</p>
		                            <p>Update_tree : Increments the frequency counts for the symbols (including any new ones) then updates the configuration of the tree.</p>
		                            <p>The encoder and decoder must use exactly the same initial_code and update_tree routines.</p>
		                            <p>Nodes are numbered in order from left to right, bottom to top. The numbers in parentheses indicates the count.</p>
		                            <p>The tree must always maintain its sibling property, i.e., all nodes (internal and leaf) are arranged in the order of increasing counts.</p>
		                            <p>If the sibling property is about to be violated, a swap procedure is invoked to update the tree by rearranging the nodes.</p>
		                            <p>When a swap is necessary, the farthest node with count (N) is swapped with the node whose count has just been increased to (N+1).</p>		                            
		                        </ul>
	                       	</li>
	                      	<li class="dropdown">
	                       		<a href="#" id="lzw_btn" class="dropdown-toggle" data-toggle="dropdown">LZW <i class="fa fa-caret-down"></i></a>
								<ul id="lzw_desc"class="dropdown-menu">
		                            <p>LZW uses fixed-length codewords to represent variable-length strings of symbols/characters that commonly occur together, e.g., words in English text.</p>
		                            <p>LZW encoder and decoder build up the same dictionary dynamically while receiving the data.</p>
		                            <p>LZW places longer and longer repeated entries into a dictionary, and then emits the code for an element, rather than the string itself, if the element has already been placed in the dictionary.</p>
		                        </ul>
	                       	</li>
	                       <li class="dropdown">
	                			<a href="#" id="arth_btn" class="dropdown-toggle" data-toggle="dropdown">Arithmetic <i class="fa fa-caret-down"></i></a>
		                        <ul id="arth_desc"class="dropdown-menu">
		                            <p>Arithmetic coding is a more modern coding method that usually out-performs Huffman coding.</p>
		                            <p>Arithmetic coding can treat the whole message as one unit.</p>
		                            <p>A message is represented by a half-open interval [a, b) where a and b are real numbers between 0 and 1. Initially, the interval is [0, 1). When the message becomes longer, the length of the interval shortens and the number of bits needed to represent the interval increases.</p>
		                            <p>The final step in Arithmetic encoding calls for the generation of a number that falls within the range [low, high). The above algorithm will ensure that the shortest binary codeword is found.</p>
		                        </ul>
	            			</li>
	            			<li class="dropdown">
	            			    <a href="#" id="loss_btn" class="dropdown-toggle" data-toggle="dropdown">Lossless JPEG <i class="fa fa-caret-down"></i></a>
	            			    <ul id="loss_desc"class="dropdown-menu">
		                            <p>Lossless JPEG: A special case of the JPEG image compression.</p>
		                            <p>The Predictive method</p>
		                            <p>Forming a differential prediction: A predictor combines the 	values of up to three neighboring pixels as the predicted value for the current pixel, indicated by ‘X’.The predictor can use any one of the seven schemes listed in Table.</p>
		                            <p>Encoding: The encoder compares the prediction with the actual pixel value at the position ‘X’ and encodes the difference using one of the lossless compression techniques we have discussed, e.g., the Huffman coding scheme.</p>
		                        </ul>
            			    </li>
            			    <li class="dropdown">
	            			    <a href="#" id="dct_btn" class="dropdown-toggle" data-toggle="dropdown">DCT <i class="fa fa-caret-down"></i></a>
	            			    <ul id="dct_desc"class="dropdown-menu">
		                            <p>Given an input function f(i, j) over two integer variables i and j (a piece of an image), the 2D DCT transforms it into a new function F(u, v), with integer u and v running over the same range as i and j.</p>
		                            <p>2D Inverse Discrete Cosine Transform (2D IDCT).</p>
		                            <p>The inverse function is almost the same, with the roles of f(i, j) and F(u, v) reversed, except that now C(u)C(v) must stand inside the sums.</p>
		                            <p>The formulation of the DCT that allows it to use only the cosine basis functions of the DFT is that we can cancel out the imaginary part of the DFT by making a symmetric copy of the original input signal.</p>
		                            <p>DCT of 8 input samples corresponds to DFT of the 16 samples made up of original 8 input samples and a symmetric copy of these.</p>
		                        </ul>
            			    </li>
            			    <li class="dropdown">
	            			    <a href="#" id="quan_btn" class="dropdown-toggle" data-toggle="dropdown">Quantization <i class="fa fa-caret-down"></i></a>
	            			    <ul id="quan_desc"class="dropdown-menu">
		                            <p>Reduce the number of distinct output values to a much smaller set.</p>
		                            <p>Main source of the “loss” in lossy compression.</p>
		                            <p>Three forms of quantization :</p>
		                            <p>Uniform : midrise and midtread quantizers.<br>Nonuniform: companded quantizer.<br>Vector Quantization.</p>		                            
		                        </ul>
            			    </li>	                        
	                    </ul>
					</nav><!--/ Navigation end -->									
				</div><!--/ Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->
	
	<!-- run length panel for inputs-->
	<div class="container" id="encode_decode_run_length_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Run Length</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_run_length_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="run_length_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_run_length_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /run length panel for inputs-->
	
	
	<!-- variable run length (VLC) panel for inputs-->
	<div class="container" id="encode_decode_v_run_length_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Variable Run Length</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_v_run_length_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="v_run_length_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_v_run_length_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /variable run length (VLC) panel for inputs-->


	<!-- huffman panel for inputs-->
	<div class="container" id="encode_decode_huffman_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Huffman</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_huffman_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="huffman_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_huffman_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /huffman panel for inputs-->
		

		<!-- adaptive huffman panel for inputs-->
	<div class="container" id="encode_decode_a_huffman_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Adaptive Huffman</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_a_huffman_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="a_huffman_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_a_huffman_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /adaptive huffman panel for inputs-->	


		<!-- LZW panel for inputs-->
	<div class="container" id="encode_decode_lzw_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>LZW</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_lzw_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="lzw_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_lzw_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /LZW panel for inputs-->	


		<!-- Arthmetic panel for inputs-->
	<div class="container" id="encode_decode_arth_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Arthmetic</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Initial Characters :</label>
                    <input type="text" class="form-control" id="encode_arth_int_chars" style="color:white;" placeholder="Enter initial characters..">
                    <label for="name" style="color:white;">Message :</label>
                    <input type="text" class="form-control" id="encode_arth_message" style="color:white;" placeholder="Enter your message..">
                 </div>
                 <div hidden id="arth_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_arth_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /Arthmetic panel for inputs-->



		<!-- lossless jpeg panel for inputs-->
	<div class="container" id="encode_decode_loss_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Lossless JPEG</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">                    
                    <label for="name" style="color:white;">Array Size :</label> 
                    <input type="text" class="form-control" id="encode_loss_size" style="color:white;" placeholder="Enter 8 or 16 or 32...">
                    <label for="name" style="color:white;">Predictor :</label> 
                    <input type="text" class="form-control" id="encode_loss_predictor" style="color:white;" placeholder="Enter number from 1 to 7">
                 </div>
                 <div hidden id="loss_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_loss_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /lossless jpeg panel for inputs-->



		<!-- DCT panel for inputs-->
	<div class="container" id="encode_decode_dct_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>DCT</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Image : </label>  <a class="btn btn-primary">Upload</a>
                    <input type="text" class="form-control" id="encode_dct_path" style="color:white;" placeholder="Image path..">
                 </div>
                 <div hidden id="lzw_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_lzw_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /DCT panel for inputs-->




	<!-- Quantization panel for inputs-->
	<div class="container" id="encode_decode_quan_panel" hidden style="position: fixed; top:150px; width:300px;">
	    <div class="row-md-6">
            <div class="panel panel-danger" style="background:transparent;">
              <div class="panel-heading" style="background:transparent;">
                 <h3 align="center" class="panel-title" style="color:white;"><strong>Quantization</strong></h3>
              </div>
              <div class="panel-body" style="background:transparent;">
                 <div class="form-group">
                    <label for="name" style="color:white;">Image : </label>  <a id="upload_quan"class="btn btn-primary">Upload</a>
                    <form hidden id="upload_form" action="upload_txt_file.php" method="POST" enctype="multipart/form-data">
                        <input onchange="readURL(this);" type="file" name="file_select" id="file_select" />                         
                    </form>
                    <input type="text" class="form-control" id="encode_quan_path" style="color:white;" placeholder="Image path..">
                    <label for="name" style="color:white;">Distribution number :</label> 
                    <input type="text" class="form-control" id="encode_quan_magic" style="color:white;" placeholder="Enter 8 or 16 or 32...">
                 </div>
                 <div hidden id="lzw_alert" class="alert alert-danger" style="background:transparent; color:white;"role="alert">Please, Enter your message first..</div>
              </div>
              <div class="panel-footer" style="background:white;">
                 <p class="animated4" align="center"><a href="#" id="encode_decode_quan_btn" class="slider btn btn-primary">Encode</a></p>
              </div>
            </div>
        </div>
    </div>
	<!-- /Quantization panel for inputs-->

	
	<!--Show panel-->
	<div id="show" hidden class="container" style="position: relative; top:150px; left:120px; width:1050px; height:660px;">
	    <div class="panel panel-danger scrollbar"  id="style-4" style="width:1020px; background:transparent; overflow: auto; height:510px;">
            <div class="panel-body force-overflow" id="show_panel">
                <div id="show_panel_labels" class="container">                     
                </div>    
            </div>
        </div>
    </div>    
	<!--/Show panel-->			
			
</div>


<!--<circle cx="100" cy="100" r="20" style="fill:red;"/>
<circle cx="50" cy="200" r="20" style="fill:red;"/>
<circle cx="150" cy="200" r="20" style="fill:red;"/>
<line x1="100" y1="120" x2="50" y2="175" marker-end="url(#triangle)" stroke="white" stroke-width="2"/>
<line x1="100" y1="120" x2="150" y2="175" marker-end="url(#triangle)" stroke="white" stroke-width="2"/>                        
<text x="98" y="105" font-family="sans-serif" font-size="20px" text-anchor="middle" fill="white">3</text>

<marker id="triangle" viewBox="0 0 10 10" refX="0" refY="5" markerUnits="strokeWidth" markerWidth="4" stroke="white" markerHeight="3" orient="auto">
  <path d="M 0 0 L 10 5 L 0 10 z"/>
</marker>-->

<script id="page_script">
var data;            	        
  


$(function(){


	 /********
     ********    Quantization javascript code
     ********
     ********/

    //when user press open from the file menu
    $('#upload_quan').on('click', function(e){
        e.preventDefault();
        $('#file_select').trigger('click');
    });



   /* $("#file_select").change(function() {                    
             
                   
    });*/

     //when adaptive huffman button pressed
    $('#quan_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#quan_desc').toggle(1000);
        $('#encode_decode_quan_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_quan_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var path = $('#encode_quan_path').val();
        var magic = $('#encode_quan_magic').val();
                              
    });

     /***********end of Quantizaation code***********/





	 /********
     ********    DCT javascript code
     ********
     ********/

     //when adaptive huffman button pressed
    $('#dct_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#dct_desc').toggle(1000);
        $('#encode_decode_dct_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_dct_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var path = $('#encode_dct_path').val();
        
               
        
    });

     /***********end of DCT code***********/





	 /********
     ********    lossless javascript code
     ********
     ********/

     //when lossless button pressed
    $('#loss_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#loss_desc').toggle(1000);
        $('#encode_decode_loss_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_loss_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var size = $('#encode_loss_size').val();
        var predictor = $('#encode_loss_predictor').val();       
               
        var html = do_lossless(size , predictor);           
        $('#show_panel_labels').html(html);
        $('#show').slideDown(2000);   
        
    });

     /***********end of lossles jpeg code***********/







	/********
     ********    Arthmetic javascript code
     ********
     ********/

     //when adaptive huffman button pressed
    $('#arth_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#arth_desc').toggle(1000);
        $('#encode_decode_arth_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_arth_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var int_chars = $('#encode_arth_int_chars').val();
        var message = $('#encode_arth_message').val();
        
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#arth_alert').fadeIn(200);
            return false;
        }
        else if(!int_chars)
        {
        	$('#arth_alert').fadeIn(200);
            return false;
        }
        else
        {            
        	var html = input_characters(int_chars , message);        	
        	$('#show_panel_labels').html(html);
        	$('#show').slideDown(2000);

        }        
        
    });


    //when cursor goes into message input
    $('#encode_arth_message').on('mousedown' , function(){
       $('#arth_alert').fadeOut(200); 
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });

    //when cursor goes into message input
    $('#encode_arth_int_chars').on('mousedown' , function(){
       $('#arth_alert').fadeOut(200); 
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });

     /***********end of Arthmetic code***********/







	/********
     ********    LZW javascript code
     ********
     ********/

     //when adaptive huffman button pressed
    $('#lzw_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#lzw_desc').toggle(1000);
        $('#encode_decode_lzw_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_lzw_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var message = $('#encode_lzw_message').val();
        
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#lzw_alert').fadeIn(200);
            return false;
        }
        else
        {
        	var length = message.length;        	        	
        	var string = []; 
        	var dictionary = [];     	        	
        	var code_counter = 1;
        	var s = message[0];
            var c;
            var s_and_c;
            var output = [];

            //loop throw the message extract every symbol and it's count
            for(var i=0 ; i<length ; i++)
            {
                //check that the current character not taken before 
                if(string.indexOf(message[i]) <= -1)
                {
                    string.push(message[i]);                    
                    dictionary.push([code_counter , message[i]]);
                    code_counter++;                    
                }
            }   

            var html = draw_dictionary(dictionary);
            $('#show_panel_labels').html(html);
            $('#show').slideDown(2000);        
            html = '<br><br>';
            html += '<div class="container" style="width: 800px;"><table style="color : #BD3613; font-family: "Times New Roman", Times, serif;" class="table table-hover"><caption><h3>LZW Processing</h3></caption><thead><tr><th>S</th><th>C</th><th>Output</th><th>Code</th><th>String</th></tr></thead><tbody>';		

            for (var i = 1; i <= length; i++) 
            {
            	c = message[i];
            	s_and_c = s+c;

            	if(i == length)
            	{
            		html += '<tr><td>'+s+'</td><td>End Of String</td>'; 
            	}
            	else
            	{
            		html += '<tr><td>'+s+'</td><td>'+c+'</td>'; 
            	}            	            

            	if(check_existance(s_and_c , dictionary))
            	{
            		s = s_and_c;
            		html += '<td>---</td><td>---</td><td>---</td>'; 
            	}
            	else
            	{
            		output.push(get_s_code(s , dictionary));
            		dictionary.push([code_counter , s_and_c]);

            		if(i == length)
            		{
            			html += '<td>'+get_s_code(s , dictionary)+'</td><td>---</td><td>---</td>'; 
            		}
            		else
            		{
            			html += '<td>'+get_s_code(s , dictionary)+'</td><td>'+code_counter+'</td><td>'+s_and_c+'</td>'; 
            		}	
            		
            		code_counter++;
            		s = c;
            	}

            	html += '</tr>'; 
            }

            html += '</tbody></table></div>';
            html += '<br>';
            html += '<div align="center" style="color : #BD3613;"><h2>Code</h2><h4>'+output+'</h4></div>';            
            $('#show_panel_labels').append(html);
            console.log(dictionary);
            console.log(output);           
            
        }        
        
    });


    //when cursor goes into message input
    $('#encode_lzw_message').on('mousedown' , function(){
       $('#lzw_alert').fadeOut(200); 
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });

     /***********end of LZW code***********/






	/********
     ********    Adaptive Huffman javascript code
     ********
     ********/

     //when adaptive huffman button pressed
    $('#a_huffman_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#a_huffman_desc').toggle(1000);
        $('#encode_decode_a_huffman_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_a_huffman_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var message = $('#encode_a_huffman_message').val();
        
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#a_huffman_alert').fadeIn(200);
            return false;
        }
        else
        {
           alert('all goes well');                                    
        }        
        
    });


    //when cursor goes into message input
    $('#encode_a_huffman_message').on('mousedown' , function(){
       $('#a_huffman_alert').fadeOut(200); 
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });

     /***********end of adaptive huffman***********/









	/********
     ********    Huffman javascript code
     ********
     ********/

     //when huffman button pressed
    $('#huffman_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#huffman_desc').toggle(1000);
        $('#encode_decode_huffman_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_huffman_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var message = $('#encode_huffman_message').val();
                
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#huffman_alert').fadeIn(200);
            return false;
        }
        else
        {
            create_draw_sorted_list(message);
            apply_huffman_encode();            

        }        
        
    });


    //when cursor goes into message input
    $('#encode_huffman_message').on('mousedown' , function(){
       $('#huffman_alert').fadeOut(200); 
       clear_all();
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });

     /***********end of huffman code***********/






    /********
     ********    Variable Run length (VLC) javascript code
     ********
     ********/
         
    //when variable run length button pressed
    $('#variable_run_length_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#variable_run_length_desc').toggle(1000);
        $('#encode_decode_v_run_length_panel').toggle(1000); 
    });      
    
    //when user press encode button
    $('#encode_decode_v_run_length_btn').on('click' , function(e){    
        e.preventDefault();
        
        //get the message entered by the user
        var message = $('#encode_v_run_length_message').val();
        
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#v_run_length_alert').fadeIn(200);
            return false;
        }
        else
        {
            //get length of the message
            var length = message.length;

            //variable to count characters
            var count = 1;

            //$('#show_panel_labels').append('<div align="center"><h1 style="color:white;"> Word :  '+message+'</h1></div><br>');            
            
            //two arrays to hold every symbol and it's count
            var symbols = [];
            var symbol_count = [];            
            var symbol_code = [];
            var code = "0";
            
            //reset message area
            $('#encode_v_run_length_message').val('');
            //show the show area
            $('#show').slideDown(1000);            
            
            //loop throw the message extract every symbol and it's count
            for(var i=0 ; i<length ; i++)
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
                    symbol_code.push(code);
                    
                    //reset count
                    count = 1;
                    code = "1"+code;
                }
            }            

        	var last_code = symbol_code[symbol_code.length-1];        	
        	last_code = last_code.slice(0,-1);        	
        	symbol_code[symbol_code.length-1] = last_code;
        	
            sort_symbols_and_counts(symbols , symbol_count);

            nodes_array = create_nodes_array(symbols , symbol_count);
            $('#show_panel_labels').append('<div align="center"><h1 style="color:green;"> Word :  <strong>'+message+'</strong></h1></div><br>');
            draw_tree(nodes_array);          
            $('#show_panel_labels').append('<br><div align="center"><h1 style="color:green;"><strong>Result of Performing Shannon-Fano</strong></h1></div>');
            $('#show_panel_labels').append(draw_table(symbols , symbol_count , symbol_code));
            //console.log(nodes_array);                                     
            //console.log(symbols);                                    
			//console.log(symbol_count);  			
        }

    });

    //when cursor goes into message input
    $('#encode_v_run_length_message').on('mousedown' , function(){
       $('#v_run_length_alert').fadeOut(200);       
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });
 
     /***********end of variable run length code***********/

        
    
    
    /********
     ********    Run length javascript code
     ********
     ********/
    
    //when run length button pressed
    $('#run_length_btn').on('click' , function(e){
        e.preventDefault();
        
        $('#run_length_desc').toggle(1000);
        $('#encode_decode_run_length_panel').toggle(1000); 
    });   
        
    //when user press encode button
    $('#encode_decode_run_length_btn').on('click' , function(e){
        e.preventDefault();
        //get the message entered by the user
        var message = $('#encode_run_length_message').val();
        
        //alert user if he didn't enter the message
        if(!message)
        {
            $('#run_length_alert').fadeIn(200);
            return false;
        }
        else
        {
            //get length of the message
            var length = message.length;
            //variable to count characters
            var count = 1;
            
            $('#show_panel_labels').append('<div align="center"><h1 style="color:green;"> Word :  '+message+'</h1></div><br>');
            //two arrays to hold every character and it's count
            var characters = [];
            var char_count = []; 
              
            //id for each div                     
            var id = 0;
            
            $('#encode_run_length_message').val('');
            //show the show area
            $('#show').slideDown(1000);
            
            //loop throw message
            for(var i=0 ; i<length ; i++)
            {
                //increase count with 1 if the next character is equal current
                if(message[i] == message[i+1])
                {
                    count++;
                }
                else
                {
                    if(message[i] == " ")
                    {
                        characters.push('space'); 
                        char_count.push(count);
                        
                        //make a hidden div contains the current character and it's count
                        $('#show_panel_labels').append('<div align="center" id="'+id+'" hidden><h2 style="color:white"><strong>Character : </strong><span class="label label-success">space</span><strong>  Count : </strong> <span class="label label-primary">'+count+'</span></h2></div>');                    
                        count = 1;
                        id++;
                    }
                    else
                    {
                        characters.push(message[i]);
                        char_count.push(count); 
                        
                        //make a hidden div contains the current character and it's count
                        $('#show_panel_labels').append('<div align="center" id="'+id+'" hidden><h2 style="color:white"><strong>Character : </strong><span class="label label-success">'+message[i]+' '+'  </span><strong>  Count : </strong> <span class="label label-primary">'+count+'</span></h2></div>');                    
                        count = 1;  
                        id++;
                    }                                                                                                    
                }                
            }
             
            console.log(characters);            
            console.log(char_count);            
            
            //initialize the id of the div's (begin from first div)
            id = 0;
            
            //get the length of the generated array
            var new_length = characters.length;                                                       
            
            //loop throw every character
            for(var i=0 ; i<new_length ; i++)
            {
                //show the div containing current character an it's count 
                $('#'+id).slideDown(4000);
                id++;
            }
                        
        }
    }); 
    
    //when cursor goes into message input
    $('#encode_run_length_message').on('mousedown' , function(){
       $('#run_length_alert').fadeOut(200); 
       
       //hide the show area
       $('#show').slideUp(1000);
       $('#show_panel_labels').html('');
    });  
    
    /*********** end of run length javascript code ***********/ 

});

</script>
