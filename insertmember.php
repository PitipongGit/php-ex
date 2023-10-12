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
    <h1>Insert Member</h1><br>
    <form id="form1" name="form1" method="post" action="insertmembersuccess.php">
        <p>

            <label for="mem_id">Member-ID</label>
            <input type="text" name="mem_id" id="mem_id">

        </p>

        <p>

            <label for="mem_name">ชื่อ</label>

            <input type="text" name="mem_name" id="mem_name">

        </p>

        <p>

            <label for="mem_lastname">นามสกุล</label>

            <input type="text" name="mem_lastname" id="mem_lastname">

        </p>

        <p>

            <label for="mem_address">ที่อยู่</label>

            <input type="text" name="mem_address" id="mem_address">

        </p>
        <p>

            <label for="mem_tel">เบอร์โทรติดต่อ</label>

            <input type="text" name="mem_tel" id="mem_tel">

        </p>
        <input id="submit_button" type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>