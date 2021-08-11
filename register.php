<?php
    $link = mysqli_connect("localhost", "root", "", "college");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["Course"];
    $query = "INSERT INTO register VALUES('$name', '$email', '$course')";
    if(mysqli_query($link, $query)){
       if( header("Location: registermsg.html"));
        exit();

    }else{
        echo "not inserted";
    }
?>