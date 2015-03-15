<?php
    
    require("../includes/functions.php");   
    
    //set the path that will contain the uploaded file 
    $target_path = "uploads/";
    $target_path = $target_path . basename( $_FILES['file_select']['name']); 
    $file_name = basename( $_FILES['file_select']['name']);
    
    //check if the file name exists in the uploads folder                
    
    //upload the file to the given directory
    if (move_uploaded_file($_FILES["file_select"]["tmp_name"], $target_path))
    {       
        list($width, $height) = getimagesize($target_path);
        $pixels = 0;
        for($x=1;$x<=$width;$x++)
        {
            for($y=1;$y<=$height;$y++)
            {
                $pixel=imagecolorat($, $x, $y);
                $array[$x][$y] = $pixel; 
            }
        }       
    }
    
?>
