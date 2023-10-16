<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<link rel="stylesheet" type="text/css" href="css/Homecss.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo&family=Permanent+Marker&family=Ysabeau+SC&display=swap" rel="stylesheet">
<meta charset="utf-8" />
<title>International Melbourne Hotel</title>
</head>
 
<body>
    <header>
        <?php include "inc/Nav.inc" ?>
    </header>
    <center>
        <?php
 
        include "inc/db_connect.inc";
        
        // Taking all 7 values from the form data(input)
        $facility = $_REQUEST['FacName'];
        $description =  $_REQUEST['FacDesc'];
        $caption = $_REQUEST['ImgCap'];
        $price = $_REQUEST['price'];
        $capacity = $_REQUEST['capacity'];
        $image = $_REQUEST["ImgFile"];
        $config = $_REQUEST['bedConfig'];
         
        // Performing insert query execution
        // here our table name is facilities
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
        $sql = "INSERT INTO facilities  VALUES ('0','$facility','$description','$caption','$price','$capacity','$image','$config')";

        if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
            if(mysqli_query($conn, $sql)){
                $target_file = "images/$image";
                move_uploaded_file($_REQUEST['ImgFile'], $target_file);
                echo "<h3>data stored in a database successfully. Please navigate to Gallery to see your facility</h3>";
                echo nl2br("\n $facility\n $description \n $caption \n $price \n $capacity \n $image \n $config");

            }else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
        }else {

            if(mysqli_query($conn, $sql)){

                $target_file = "/home/sl9/s3944519/public_html/cosc2446/a2/InternationalMelbourneHotel/images/$image";
                echo "<h3>data stored in a database successfully. Please navigate to Gallery to see your facility</h3>";
                echo nl2br("\n $facility\n $description \n $caption \n $price \n $capacity \n $image \n $config");
                move_uploaded_file($_REQUEST['ImgFile'], $target_file);

            }else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <footer>
    <?php include 'inc/Footer.inc' ?>
    </footer>
</body>
 
</html>

</DOCTYPE>