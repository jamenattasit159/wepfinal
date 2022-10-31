<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>insertdata</title>
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
<center><span class="badge bg-primary">connection Complete</span><br><br>
<form action="insert_successCus.php" method="GET">
<p>
<label for="username">Username  </label>
<input type="text" name="username" id="username" value=""/>
</p>
<p>
<label for="password">Password  </label>
<input type="text" name="password" id="password" value=""/>
</p>
<p>
<label for="gender">Gender</label>
<input type="text" name="gender" id="gender" value="" />
</p>
<p>
<label for="education">Education </label>
<input type="text" name="education" id="education" value="" />
</p>
<p>
<label for="email">Email </label>
<input type="email" name="email" id="email" value="" />
</p>
<p>
<label for="hobby">Hobby</label>
<input type="text" name="hobby" id="hobby" value="" />
</p>
<p>
    <input type="submit" value="SUBMIT" >
    <input type="button" onclick="window.location='showform01.php'" value="CANCEL">
    
</p>
</center>
</html>
