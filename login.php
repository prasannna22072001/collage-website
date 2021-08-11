<?php
    $link = mysqli_connect("localhost", "root", "", "college");

   $query = "SELECT * FROM signup";

   $sql = mysqli_query($link, $query);

   while($row = mysqli_fetch_array($sql)){ 
    $email = $_POST["email"];
    $password = $_POST["password"];
    
   if(($email == $row["email"]) && ($password == $row["password"])){
    header("Location: paruluniversity.html");
    exit();
}else{
    $a = 0;
}
}

if($a == 0){
    echo '<script type="text/javascript">'; 
    echo 'alert("incorrect email or password");'; 
    echo 'window.location.href = "index.html";';
    echo '</script>';
}
?>