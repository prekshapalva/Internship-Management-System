<?php
    include("dbconnect.php");
    $int_id = $_POST['int_id'];
    $int_role = $_POST['int_role'];
    $int_duration = $_POST['int_duration'];
    $com_id = $_POST['com_id'];
    $insert = mysqli_query($connect, "INSERT INTO intern (Int_ID, Int_Role, Int_Duration, Com_ID) VALUES ('$int_id', '$int_role', '$int_duration', '$com_id);");
    if(insert){
        echo '
        <script>
            alert("Registeraton succesful");
            window.location = "company.html";
        </scipt>
            ';
    }
    else{
        <script>
            alert("Some error has occured");
            window.location = "company.html";
        </scipt>
            ';
    }