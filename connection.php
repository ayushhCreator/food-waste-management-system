<?php
//change mysql_connect(host_name,username, password); 
$connection = mysqli_connect("localhost", "root", "67890");
$db = mysqli_select_db($connection, 'socitaldb');
?>