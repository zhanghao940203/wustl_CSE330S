<?php
        session_start();
        $filename = $_POST['filename'];
        $username = $_SESSION['username'];
        $fullpath = sprintf("/home/zhanghao940203/uploads/%s/%s", $username,$filename);
        unlink($fullpath);//delete the file
        echo strip_tags("<input type="."radio"." name="."filename"." value=".$filename."/>".$filename."<br>\n"); 
?>