<?php
$connect = mysqli_connect ("localhost", "root","","internship") or die("connection failed");
if($connect){
    echo "connection successful";
}
else{
    echo "not connected";
}
?>

<?php
    include("dbconnect.php");
    $col_nam = $_POST['col_nam'];
    $col_id = $_POST['col_id'];
    $col_admin= $_POST['col_admin'];
    $col_add = $_POST['col_add'];
    $col_email = $_POST['col_email'];
    $insert = mysqli_query($connect, "INSERT INTO college (Col_ID, Col_Name, Col_Admin, Col_Address, Col_Email) VALUES ('$col_id', '$col_nam', '$col_admin', '$col_add', '$col_email');");
    if($insert){
        echo '
        <script>
            alert("Registeraton succesful");
            window.location = "college.html";
        </scipt>
            ';
    }
    else{
        echo '
        <script>
            alert("Some error has occured");
            window.location = "college.html";
        </scipt>
            ';
    }
    ?>