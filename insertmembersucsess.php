<?php



require 'dvdconn.php';
$sql_update="INSERT INTO member(mem_id,mem_name,mem_lastname,mem_address,mem_tel) VALUES ('$_POST[mem_id]','$_POST[mem_name]','$_POST[mem_lastname]' ,'$_POST[mem_address]' ,'$_POST[mem_tel]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/PHP_Exercise/PHP_Exercise_Dvdshop/membermenu.php");
}

?>