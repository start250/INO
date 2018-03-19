<?php
if(isset($_REQUEST["book_link"])){
    // Get parameters
    $file =$_REQUEST["book_link"]; // Decode URL-encoded string
    $filepath = urlencode($_SERVER['DOCUMENT_ROOT'].'/INOGIT/Resources/Storage/Books/'.$file);
    echo  $filepath;}
    // Process download
   if(file_exists($filepath)) {
echo "sadsa";
   }
       /*
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}?>*/


