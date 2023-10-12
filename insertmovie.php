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
    <form id="form1" name="form1" method="post" action="insertmoviesuccess.php">
        
        <p>

        <label for="dvd_id">รหัสภาพยนตร์</label>
        <input type="text" name="dvd_id" id="dvd_id ">

        </p>



        <p>

            <label for="dvd_name">ชื่อภาพยนตร์</label>
            <input type="text" name="dvd_name" id="dvd_name">

        </p>

        <p>

            <label for="dvdmovie_type">ประเภทภาพยนตร์</label>

            <input type="text" name="dvdmovie_type" id="dvdmovie_type">

        </p>

        <p>

            <label for="dvdmovie_yrs">ปีที่เข้าฉาย</label>

            <input type="text" name="dvdmovie_yrs" id="dvdmovie_yrs">

        </p>

        <p>

            <label for="dvd_price">ราคา (บาท)</label>

            <input type="text" name="dvd_price" id="dvd_price">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mm.php'>Home</a>
    </form>
</body>

</html>