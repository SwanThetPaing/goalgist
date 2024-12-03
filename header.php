<?php
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
 #nav{
  background-color:#fe4536;
 }
 .navbar-brand {
  color:#fff;
  font-weight:600;
 }
 .nav-item , .nav-link{
  color:#fff;
  font-weight:600;
 }
   
</style>
<body>
    <?php 
    if(empty($_SESSION['user'])):
    ?>
<nav class="navbar navbar-expand-lg" id="nav"  >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#"><image src="img/logo/logo4.png" widht="100px" height="50px">
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="register.php" >Register</a>
        </li>


      </ul>
     <!--- <nav>
      <form action="search.php" method="post" class="d-flex" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      </nav>    --->                      
           
           </div>
           </div>
    </div>
  </div>
</nav>
<?php 
else: 
?>

<nav class="navbar navbar-expand-lg" id="nav" >
  <div class="container-fluid" id="mg">
  <a class="navbar-brand" href="#"><image src="img/logo/logo4.png" widht="100px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="logout.php" >Logout</a>
      </li>
      </ul>
      <nav>
  <!---    <form action="search.php" method="post" class="d-flex" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      </nav> --->

        </div>
  </div>
</nav>
<?php 
endif;
?>
</body>
</html>