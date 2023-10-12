<?php
    require 'dvdconn.php';
    $sql = "SELECT * FROM dvd_product";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>DVD LIST</title>

    <style>
        nav
        {
            padding: 1.6% ;
            background-color : #78D6C6;
        }
        nav a
        {
            margin-left:1%;
            text-decoration: none;
            border-radius: 10px;
            color:#000000;
            padding: 8px 12px; 
            transition: background-color 0.3s, color 0.3s;
        }
        nav a:hover
        {
            /*padding:0.5%;*/
            background-color : #419197;
            border-radius: 10px;
            color:#ffffff;
        }
        #Mainmenu
        {
            font-size : 28px;
        }
        .container
        {
            margin-top:2%;
        }
    </style>
</head>

<body>
    <nav>
        <a id="Mainmenu" href='mainmenu.php'>MainMenu</a>
        <a  href='actormenu.php'>Superstars List</a>
        <a  href='membermenu.php'>Member List</a>
    </nav>
    <div class="container">
        <h1>DVD LIST</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">DVD_ID</th>
                    <th scope="col-4">ชื่อภาพยนตร์</th>
                    <th scope="col-4">ประเภท</th>
                    <th scope="col-4">ปีที่ฉาย</th>
                    <th scope="col-4">ราคา(บาท)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row["dvd_id"]."</td>"."
                            <td>".$row["dvd_name"]."</td>"."
                            <td>".$row["dvdmovie_type"]."</td>"."
                            <td>".$row["dvdmovie_yrs"]."</td>"."
                            <td>".$row["dvd_price"]."</td>";

                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertmovie.php'>Insert Movie</a>
    </div>
</body>

</html>