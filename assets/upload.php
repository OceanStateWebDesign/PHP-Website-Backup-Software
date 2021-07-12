<?php

require_once('./protect-this.php');

$target_dir = "./../";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "zip") {
  echo "Sorry, only ZIP files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 

else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))

{
    echo('<br></br>');
    echo('<div style="text-align:center;">');
    echo ("The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.");
    echo("<p style=font-size: 16px; padding-top: 5px;> Upload Successful</p>");
    echo("<button onclick=\"document.location='/'\">Back</button>");
    echo('<br></br>');

//Call Cli Unzip command to unzip uploaded file
system('unzip ./../*.zip -d /');

//Import Database File
system("mysql --user=test --password=password databasename < ./DbExport.sql");

}

else

{
  echo 'There has been an error restoring your backup';
}


}

?>
