<?php
    require 'dvdconn.php';
    $sql = "SELECT * FROM superstar";
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
    <title>SUPERSTAR LIST</title>

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
        <h1>SuperStar</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SuperStar-ID</th>
                    <th scope="col-4">ชื่อ</th>
                    <th scope="col-4">นามสกุล</th>
                    <th scope="col-4">เพศ</th>
                    <th scope="col-4">อายุ</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["st_id"]."</td>".
                            "<td>".$row["st_firstname"]."</td>".
                            "<td>".$row["st_lastname"]."</td>".
                            "<td>".$row["st_gender"]."</td>".
                            "<td>".$row["st_age"]."</td>";
                            //"<td>"."<a class='btn btn-warning' href='editbio.php?sid=".$row["st_id "]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertactor.php'>Insert Superstar</a>
    </div>
</body>

</html>