<?php
    include("dbconnect.php");
    $com_id = $_POST['com_id'];
    $com_nam = $_POST['com_nam'];
    $com_admin = $_POST['com_admin'];
    $com_add = $_POST['com_add'];
    $com_email = $_POST['com_email];
    $insert = mysqli_query($connect,"INSERT INTO company (Com_Name,Com_ID,Com_Admin,Com_Add,Com_Email) VALUES ('$com_nam', '$com_id', '$com_admin', '$com_add', '$com_email');");
    if($insert){
        echo '
        <script>
            alert("Registration successful");
            window.location = "company.html";
        </script>
            '
            ;
    }
    else{
        echo '
        <script>
            alert("Some error has occured");
            window.location = "company.html";
        </script>
        '
            ;
    }
?>