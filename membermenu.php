<?php
    require 'dvdconn.php';
    $sql = "SELECT * FROM member";
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
    <title>MEMBER LIST</title>

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
        <h1>MEMBER LIST</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">MEMBER_ID</th>
                    <th scope="col-4">ชื่อ</th>
                    <th scope="col-4">นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["mem_id"]."</td>".
                            "<td>".$row["mem_name"]."</td>".
                            "<td>".$row["mem_lastname"]."</td>".
                            //"<td>".$row["mem_name"]." ".$row["mem_lastname"]."</td>".
                            "<td>".$row["mem_address"]."</td>".
                            "<td>".$row["mem_tel"]."</td>";
                            //"<td>"."<a class='btn btn-warning' href='editbio.php?sid=".$row["member_id "]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertmember.php'>Insert Member</a>
    </div>
</body>

</html>