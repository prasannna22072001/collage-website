<?php
 $servername = "localhost";
 $user = "root";
 $password = "";
 $db = "test";
    $conn = mysqli_connect($servername, $user, $password, $db);

    if(!$conn){
        echo "connect failed".mysqli_connect_error();
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["Course"];
    $comments = $_POST["comments"];
    $sql = "INSERT INTO contact VALUES ('$name',' $email','$course','$comments')";
    if(mysqli_query($conn, $sql)){
        if( header("Location: contactusmsg.html"));
        exit();
    }
?> 