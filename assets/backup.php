<?php

require_once('./protect-this.php');

//Add MYSQL Credentials Here
exec("mysqldump --user=test --password=pass --add-drop-table databasename >> ./DbExport.sql");

sleep(1);

//Executes zip Cli Command
exec('zip -r ./../Website_Backup.zip "/var/www/html/websitedir"');

echo '<div style="text-align:center;">';
echo '<div style="text-align:center; font-family: Georgia, serif;">';

echo '<h1 style="font-size:40px; padding: 25px; background-color: dimgray; color: white;"> Field Level E-Sports Backup System</h1>';

echo '<h1 style="font-size:32px; padding-top: 25px;">Export Successful</h1>';

echo '<p style=font-size: 16px; padding-top: 5px;> Backup Complete! <br></> Please visit the link below to download your ZIP file </p>';

echo("<button onclick=\"document.location='/Website_Backup.zip'\">Download Backup</button>");

echo('<br></br>');

echo("<button onclick=\"document.location='/'\">Back</button>");

?>
