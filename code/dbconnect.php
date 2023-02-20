<?php
$connect = mysqli_connect ("localhost", "root","","internship") or die("connection failed");
if($connect){
    echo "connection successful";
}
else{
    echo "not connected";
}
?>
