<?php
    include("dbconnect.php");
    $remark = $_POST['remark'];
    $punctuality = $_POST['punctuality'];
    $communication = $_POST['communication'];
    $int_id = $_POST['int_id'];
    $insert = mysqli_query($connect,"INSERT INTO feedback (Remark, Punctuality, Communication, Int_ID) VALUES ('$remark', '$punctuality', '$communication', '$int_id');");
    if($insert){
        echo '
        <script>
            alert("Successfully added");
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