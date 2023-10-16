<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/Homecss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo&family=Permanent+Marker&family=Ysabeau+SC&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>International Melbourne Hotel</title>
    <style>
    </style>
</head>
<body>

<header>
<?php include 'inc/db_connect.inc'; include 'inc/Nav.inc';
?>
</header>


<div id="page-container">
    <hr>
        <?php
            $id = $_GET['myid'];
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
            $sql = "SELECT facilityId, facilityName, Description, Image, Caption, Capacity, Price, configuration FROM facilities WHERE facilityId = $id";
            $result = mysqli_query($conn, $sql);
           

            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class = column>';
                    echo '<image src = "https://jupiter.csit.rmit.edu.au/~s3944519/cosc2446/a2/images/'.$image = $row['Image'].'" class = "GallMainImage"><br>';  
                    echo '<image src = "images/pricetag.png" class = "GallPriceImg">';
                    echo '<h4> $' .$price = $row['Price'].'</h4>';
                    echo '<image src = "images/people.png" class = "GallPeopleImg">';
                    echo '<h4>' .$capacity = $row['Capacity'].' People</h4>';
                    echo '<image src = "images/bedicon.png" class = "GallBedImg">';
                    echo '<h4>' .$bedconfig = $row['configuration'].'</h4>';
                    echo '<h2>' .$facilityName = $row['facilityName'].'</h2>';
                    echo '<h4>' .$description = $row['Description'].'</h4>';
                    echo '</div>';
                    echo '<hr>';
                }
            }
        ?>
    <div>

</div>

<footer>
<?php include 'inc/Footer.inc';?>
</footer>
</body>
</html>