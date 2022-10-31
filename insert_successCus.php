<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>insertsuccess</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body >
        <header class="top-footer">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                  <a class="nav-link active" href="showform01.html"><img class="imag" src="logo.jpg" width="50px" ></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link " href="showform01.html">Home
                        <span class="visually-hidden">(current)</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a class="nav-link active" href="showform01.php">ลูกค้า</a>
                    </li>
                    
                    
                  </ul>
                  <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </nav>
<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"database01");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO customer(username , password, gender, education, email ,hobby) 
VALUES ('$_GET[username]','$_GET[password]','$_GET[gender]','$_GET[education]','$_GET[email]','$_GET[hobby]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='showform01.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "<center>"."<span class='badge bg-primary'>insertion data success</span>" ."<br>";
echo "<br>";
echo "<a href='showform01.php'>"."กลับหน้าหลัก"."</a>";
}
?>
</html>