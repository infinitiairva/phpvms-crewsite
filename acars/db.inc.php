<?php

$DBHost = 'mysql.infinitiairva.com'; //Your host, usually localhost
$DBUser = 'infinitiairva';  //Your database username
$DBPass = '1152017infiniti';  //Your database password
$DBName = 'infinitiairva';  //The database name you want/have the user system on

$conn = mysqli_connect("$DBHost", "$DBUser", "$DBPass")or die(mysqli_error($conn));
mysqli_select_db($conn, $DBName)or die(mysqli_error($conn));

