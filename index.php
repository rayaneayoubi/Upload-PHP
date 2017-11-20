<?php
//commentaires sut le cahier
// var_dump($_POST);
var_dump($_FILES);
$dir_upload= 'images_uploaded/';
// changement de persmission
if(isset($_POST['submit'])){
$result=  move_uploaded_file($_FILES['file']['tmp_name'],$dir_upload . $_FILES['file']['name']);
($result)
? print ("Upload succeded")
: ptint ("Upload failed");
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Upload</title>
   </head>
   <body>
<form  method="post" enctype="multipart/form-data">
  <input type="file"  name="file">
  <input type="submit" name="submit" value="send">
</form>
   </body>
 </html>
