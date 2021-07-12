<?php

require_once('./protect-this.php');

//Executes Cli command to Remove all Zip Files in the directory
exec("rm ./../*.zip");

echo('<div style="text-align:center;"><div style="text-align:center; font-family: Georgia, serif;"><h1 style="font-size:40px; padding: 25px; background-color: dimgray; color: white;"> PHP Website Backup Software</h1>');
echo('<br></br>');

echo('<div style="text-align:center;">');

echo("<p style=font-size: 24px; padding: 5px;> All Backup Files have been Removed</p>");

echo("<button onclick=\"document.location='/'\">Back</button>");

?>


