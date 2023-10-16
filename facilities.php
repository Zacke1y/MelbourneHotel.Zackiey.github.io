<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="Css/Homecss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo&family=Permanent+Marker&family=Ysabeau+SC&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>International Melbourne Hotel</title>
</head>

<body>

<header>
<?php include 'inc/Nav.inc'; include 'inc/db_connect.inc'?>
</header>


<div class="fachead">
    <h2>Discover Melbourne</h2>
    <image class="facImages"src="./images/southgatetowilliamstownferry.jpeg"></image>
    <div class="facTable">
        <table>
            <tr>
                <th>FACILITY TYPE</th>
                <th>CAPACITY</th>
                <th>BED CONFIGURATION</th>
                <th>PRICE</th>
            </tr>
            
            <?php
                if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "hotel";
                }else{
                    $servername = "talsprddb02.int.its.rmit.edu.au";
                    $username = "s3944519";
                    $password = "Zackerynova1234!";
                    $database = "s3944519";
                }
                $conn = mysqli_connect($servername, $username, $password, $database);
                $sql = "SELECT facilityName, configuration, Capacity, Price  FROM facilities";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' .$facilityName = $row['facilityName'].'</td>';
                        echo '<td>' .$capacity = $row['Capacity'].'</td>';
                        echo '<td>' .$config = $row['configuration'].'</td>';
                        echo '<td> $'.$price = $row['Price'].'</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </table>
        <br><br><br><br><br><br>
    </div>
</div>



<footer>
<?php include 'inc/Footer.inc';?>
</footer>
</body>
</html>