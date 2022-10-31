<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit data</title>
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
            <br>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "database01");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM customer WHERE username='$_GET[username]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<center><form method="GET" action="editsuccessCus.php">
<p>
<label for="username">รหัสใบเสร็จที่จะแก้ไข</label>
<input type="text" name="username" id="username" value="<?=$data['username'];?>"/>
</p>
<p>
<label for="password">รหัสลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="password" id="password" value="<?=$data['password'];?>"/>
</p>
<p>
<label for="gender">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="gender" id="gender" value="<?=$data['gender'];?>" />
</p>
<p>
<label for="education">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="education" id="education" value="<?=$data['education'];?>" />
</p>
<p>
<label for="email">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="email" name="email" id="email" value="<?=$data['email'];?>" />
</p>
<p>
<label for="hobby">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="hobby" id="hobby" value="<?=$data['hobby'];?>" />
</p>    <a><input type="submit" value="EDIT" ></a>
<input type="button" onclick="window.location='showform01.php'" value="CANCEL">
    
    
</center>    
</form>
</html>