<?php
require 'dvdconn.php';
$sql_update="INSERT INTO dvd_product(dvd_id,dvd_name,dvdmovie_type,dvdmovie_yrs,dvd_price) VALUES ('$_POST[dvd_id]','$_POST[dvd_name]','$_POST[dvdmovie_type]','$_POST[dvdmovie_yrs]','$_POST[dvd_price]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Movie Success <br>";
header("refresh: 1; url=http://localhost/PHP_Exercise/PHP_Exercise_Dvdshop/mainmenu.php");
}

?>