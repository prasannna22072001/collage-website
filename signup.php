<?php
    $link = mysqli_connect("localhost", "root", "", "college");
    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $gender = $_POST["gender"];
    
    $query = "INSERT INTO signup VALUES('$fname', '$sname', '$email', '$password', '$date', '$month', '$year', '$gender')";

    if(mysqli_query($link, $query)){
        echo '<script type="text/javascript">'; 
        echo 'alert("signup successfull");'; 
        echo 'window.location.href = "index.html";';
        echo '</script>';
    }else{
        echo '<script type="text/javascript">'; 
        echo 'alert("signup unsuccessfull");'; 
        echo 'window.location.href = "index.html";';
        echo '</script>';
    }
?>