<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <style>

    .container
        {
            margin-top:8%;
        }
    
        /* ตกแต่ง <label> */
    label {
        font-weight: bold; /* ทำให้ตัวหนังสือข้อความใน <label> หนาขึ้น */
        margin-right: 10px; /* กำหนดระยะห่างขวาของ <label> จาก <input> */
    }

    /* ตกแต่ง <input> */
    input {
        padding: 5px; /* เพิ่มขอบเขตของพื้นที่ใน <input> */
        border: 1px solid #ccc; /* เพิ่มเส้นขอบสีเทาให้ <input> */
        border-radius: 3px; /* ทำให้มีมุมโค้งเบาๆ ที่รอบขอบของ <input> */
        width: 100%; /* ทำให้ <input> ขยายตามความกว้างของคอลัมน์ */
    }
    #submit_button
    {
        width: 10%;
    }

    /* ตกแต่ง <p> (แท็กที่ครอบ <label> และ <input>) */
    p {
        margin: 10px 0; /* กำหนดระยะห่างด้านบนและด้านล่างของ <p> */
    }


</style>

</head>

<body class="container">
    <h1>Insert Superstar</h1><br>
    <form id="form1" name="form1" method="post" action="insertstsuccess.php">
        <p>

            <label for="st_id ">รหัสนักแสดง</label>
            <input type="text" name="st_id" id="st_id">

        </p>

        <p>

            <label for="st_firstname">ชื่อ</label>

            <input type="text" name="st_firstname" id="st_firstname">

        </p>

        <p>

            <label for="st_lastname">นามสกุล</label>

            <input type="text" name="st_lastname" id="st_lastname">

        </p>

        <p>

            <label for="st_gender">เพศ</label>

            <input type="text" name="st_gender" id="st_gender">

        </p>

        <p>

            <label for="st_age">อายุ</label>

            <input type="text" name="st_age" id="st_age">

        </p>

        <input id="submit_button" type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>