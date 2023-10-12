<?php
require 'dvdconn.php';
$sql_update="INSERT INTO superstar(st_id,st_firstname,st_lastname,st_gender,st_age) VALUES ('$_POST[st_id]','$_POST[st_firstname]' ,'$_POST[st_lastname]' ,'$_POST[st_gender]','$_POST[st_age]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/PHP_Exercise/PHP_Exercise_Dvdshop/actormenu.php");
}

?>