<?php
    include("dbconnect.php");
    $stu_nam = $POST['stu_nam'];
    $stu_id = $POST['stu_id'];
    $stu_branch = $POST['stu_branch'];
    $stu_skills = $POST['stu_skills'];
    $col_nam = $POST['col_nam'];
    $col_id = $POST['col_id'];
    $insert = mysqli_query($connect, "INSERT INTO student (Stu_ID, Stu_Name, Stu_Branch, Stu_Skills, Col_Name, Col_ID) VALUES ('$stu_id', '$stu_nam', '$stu_branch', '$stu_skills', '$col_nam'. '$col_id);");
    if(insert){
        echo '
        <script>
            alert("Registeraton succesful");
            window.location = "student.html";
        </scipt>
            ';
    }
    else{
        <script>
            alert("Some error has occured");
            window.location = "student.html";
        </scipt>
            ';
    }