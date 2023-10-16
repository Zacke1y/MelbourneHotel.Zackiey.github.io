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
<?php include 'inc/db_connect.inc';?>
<?php include 'inc/Nav.inc';?>
</header>

<div class="FacilityTitle">
    <h3>ADD FACILITY<h3>
    <h4>ADD NEW FACILITY HERE</h4>


    <div class = "addContainer">
        <form action="Insert.php" method = "post">
        
            <label for="FacName">Facility Name</label><br>
            <input type="text" id="FacName" name="FacName" placeholder="Facility Name..">
          
            <hr>

            <label for="FacDesc">Facility Description</label><br>
            <input type="text" id="FacDesc" name="FacDesc" placeholder="Facility Description..">
           
           
            <hr>

            <label for="ImgFile">Image File</label><br>
            <input type="file" id="ImgFile" name="ImgFile">
         
            <hr>

            <label for="ImgCap">Image Caption</label><br>
            <input type="text" id="ImgCap" name="ImgCap">
           
            <hr>

            <label for="capacity">Capacity (people)</label><br>
            <input type="number" id="capacity" name="capacity" min="1" max="5">
          
           
            <hr>
 
                
            <label for="price">Price</label><br>
            <label>$</label>
            <input type="number" id="price" name="price">

            <hr>

            <label for="bedConfig">Bed Config</label><br>
            <select name="bedConfig" id="bedConfig">
                <option>Double</option>
                <option>Single</option>
                <option>Queen</option>
                <option>King</option>
            </select>

            <hr>

            <input type="submit" value="Submit">
            <input type="button" value="Clear">

            <br><br>
           
        </form>
    </div>
</div>

<?php ?>

<footer>
<?php include 'inc/Footer.inc';?>
</footer>

</body>
</html>