function readURL(input) {

        //get the uploaded file type 
        var file = input.files[0];
        var type = file.type;  
        var name = file.name;                
        
        var formData = new FormData($('form')[0]);               
              
        $.ajax({
                url: 'upload_image_file.php',  //Server script to process data
                type: 'POST',
                xhr: function() {  // Custom XMLHttpRequest
                    var myXhr = $.ajaxSettings.xhr();
                    return myXhr;
                },
                //Ajax events
                success: function(output){
                                //get image after quantization
                                alert(output);   
                         },
                error: function(){
                           alert("Error sending the file to server!!"); 
                       },
                // Form data
                data: formData,
                //Options to tell jQuery not to process data or worry about content-type.
                cache: false,
                contentType: false,
                processData: false
           });                                  
}