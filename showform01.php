<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show</title>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database01";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo"<center>"."<span class='badge bg-primary'>connection Complete</span>" ."<br>"."<br>";
$sql = "SELECT  username, password, gender, education, email, hobby FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<center>"."<div class='card border-primary mb-3' style='max-width: 20rem;'>"."Username  "."<a href='editcustomer.php?username=$row[username]'>".$row["username"]."</a>"."<br>"
        ."Password : ".$row["password"]."<br>"
        ."Gender : ".$row["gender"]."<br>"
        ."Education : ".$row["education"]."<br>"
        ."Email : ".$row["email"]."<br>"
        ."Hobby : ".$row["hobby"]."<br>
        <br><br>"."</div>"."</center>"; 
        
        
        
    }
   
    
    
}
    else {
        echo "0 results";
    }
    echo "<center>"."<a class = 'card text-white bg-primary mb-3:center'style='max-width: 15rem' href='insertcustomer.php'>Add New Invoice</a>"."</center>"; 


    $conn->close();

?>
</html>