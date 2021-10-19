<?php

 $targetfolder = "pdf_uploads/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
echo "<div class='success'>Insert Success</div>"; }

 else {

 echo "Problem uploading file";

 }

 ?>