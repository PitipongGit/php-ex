<?php
if(!isset($_GET['dvd_id'])){
    header("refresh: 0; url=http://localhost/PHP-SQL-LAB/PHP-Exercise2/mainmenu.php");
}
require 'dvdconn.php';
$sql = "SELECT * FROM dvd_product WHERE sid='$_GET[dvd_id]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
        
        <p>

        <label for="dvd_id">รหัสภาพยนตร์</label>
        <input type="text" name="dvd_id" id="dvd_id">

        </p>
    
    <p>

            <label for="dvd_name">ชื่อภาพยนตร์</label>
            <input type="text" name="dvd_id" id="dvd_id" value="<?=$row['dvd_id'];?>" hidden>
            <input type="text" name="dvd_name" id="dvd_name" value="<?=$row['dvd_name'];?>" />

        </p>

        <p>

            <label for="dvdmovie_type">ประเภทภาพยนตร์</label>

            <input type="text" name="dvdmovie_type	" id="dvdmovie_type	" value="<?=$row['dvdmovie_type	'];?>" />

        </p>

        <p>

            <label for="dvdmovie_yrs">ปีที่เข้าฉาย</label>

            <input type="text" name="dvdmovie_yrs" id="dvdmovie_yrs" value="<?=$row['dvdmovie_yrs'];?>" />

        </p>

        <p>

            <label for="dvd_price">ราคา(บาท)</label>

            <input type="text" name="dvd_price" id="dvd_price" value="<?=$row['dvd_price'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>