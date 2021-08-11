<?php
    $link = mysqli_connect("localhost", "root", "", "test");
    $query = "SELECT * FROM contact";
    $sql = mysqli_query($link, $query);
    
    $row = mysqli_fetch_array($sql, MYSQL_NUM);
echo $row[0];
?>