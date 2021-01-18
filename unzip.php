<?php

$fileName = $_GET['file'];  // get file name in the URL param "file"

if (isset($fileName)) {    // if $fileName php variable is set than    


    $zip = new ZipArchive;          // create object
    $res = $zip->open($fileName);   // open archive
    if ($res === TRUE) {
      $zip->extractTo('./');        // extract contents to destination directory
      $zip->close();               //close the archieve    
      echo 'Extracted file "'.$fileName.'"';
    } else {
      echo 'Cannot find the file name "'.$fileName.'" (the file name should include extension (.zip, ...))';
    }
}
else {
    echo 'Please set file name in the "file" param';
}

?>
