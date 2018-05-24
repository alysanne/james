

<?php

$target_file = "movies.xml";

if(isset($_POST["submit"])) {
    
    
    // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}  
else {
   
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
    
    header('Location: index.php ');

}
}  else  {  
    
?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select xml to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
}
?>