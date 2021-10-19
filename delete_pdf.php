<?php

if(isset($_POST['remve_file']))
{
    $file_Path = $_POST['fileToRemove'];
    
    // check if the file exist
    if(file_exists($file_Path))
    {
        unlink($file_Path);
        echo 'File Deleted';
    }else{
        echo 'File Not Exist';
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP DELETE FILE FROM FOLDER</title>
    </head>
    
    <body>
        
        <form action="delete_pdf.php" method="post">
            
            File Path: <input type="text" name="fileToRemove"><br><br>
            
            <input type="submit" name="remve_file" value="Delete File">
            
        </form>
        
    </body>
    
</html>