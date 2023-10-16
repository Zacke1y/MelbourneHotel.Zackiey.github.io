<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="Css/Homecss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo&family=Permanent+Marker&family=Ysabeau+SC&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<nav>
<div class="topnav">
  <img id= "LogoImageH" src="./images/logo.jpeg">
  <div class="dropdown">
       <input type="text" class="text02" readonLy placeholder="DropDown Menu">
       <div class="option">
           <a href="Home.php" onmouseover="show('Home')">Home</a>
           <a href="Gallery.php" onmouseover="show('Gallery')">Gallery</a>
           <a href="facilities.php" onmouseover="show('Facilities')">Facilities</a>
           <a href="Add.php" onmouseover="show('Add')">Add</a>
       </div>
  </div>

  <script src="Main.js"></script> 

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
    </form>
  </div>
</div>
<br><br><br><br>
</nav>


</body>
</html>