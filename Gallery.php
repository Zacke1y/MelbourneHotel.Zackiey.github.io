<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
       <?php 
       include "inc/Nav.inc";
       include "inc/db_connect.inc";
       ?>
    </header>
    <hr>
    <h1 class = "GalleryHeading">Melbourne Has A Lot To Offer!<h1>
    <h2 class = "gallerySum">Here are a couple of locations and rooms you can vist and stay in Melbourne<h2>
    <br><br>

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
        $sql = "SELECT facilityId, facilityName, Description, Image, Caption, Capacity, Price  FROM facilities";
        $result = mysqli_query($conn,$sql);
        
        if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['facilityId'];
                echo '<div class = "GallColumn">';
                echo '<a href="Room.php?myid='.$id.'"><image src = "images/'.$row['Image'].'" class = "galleryimage"></a>';
                echo '<div class = "colText">';
                echo '<h2 class="project-text"><b>'.$facilityName = $row['facilityName'].'</b></h2>';
                echo '</div>';
                echo '</div>';
            }
        }else{
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['facilityId'];
                echo '<div class = "GallColumn">';
                echo '<a href="https://jupiter.csit.rmit.edu.au/~s3944519/cosc2446/a2/Room.php?myid='.$id.'"><image src = "https://jupiter.csit.rmit.edu.au/~s3944519/cosc2446/a2/images/'.$row['Image'].'" class = "galleryimage"></a>';
                echo '<div class = "colText">';
                echo '<h2 class="project-text"><b>'.$facilityName = $row['facilityName'].'</b></h2>';
                echo '</div>';
                echo '</div>';
            }
        }
    ?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
<?php 
include 'inc/Footer.inc';
?>
</footer>
</body>