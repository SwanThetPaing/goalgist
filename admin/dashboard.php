<?php
session_start();
include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Design</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Custom Styles -->
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
* {
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
  font-family: "Poopins",sans-serif;
}
body {
  display: flex;
}
/*--side bar--*/
.sidebar {
  position: sticky;
  top: 0;
  left: 0;
  bottom: 0;
  width: 70px;
  height: 100vh;
  padding: 0 1.7rem;
  color: #fff;
  overflow: hidden;
  transition: all 0.5s linear;
  background: #cc610a;
}
.sidebar:hover {
  width: 240px;
  transition: 0.5s;
}
.logo {
  height: 80px;
  padding: 16px;
}
.menu {
  height: 88%;
  position: relative;
  list-style: none;
  padding: 0;
}
.menu li{
  padding: 1rem;
  margin: 8px 0;
  border-radius: 8px;
  transition: all 0.5s ease-in-out;
}
.menu li:hover,
.active{
  background: #e0e0e058;
}
.menu a{
  color: #fff;
  font-size: 20px;
  font-weight:600;
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 1.5rem;
}
.menu a span{
  overflow: hidden;
}
.menu a i{
  font-size: 1.2rem;
}



/* ***main body */
.main--content{
  position: relative;
  background: #ebe9e9;
  width: 100%;
  padding: 1rem;
}
.header--wrapper img{
  width: 50px;
  height: 50px;
  cursor: pointer;
  border-radius: 50%;
}
.header--wrapper{
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #fff;
  border-radius: 10px;
  padding: 10px 2rem;
  margin-bottom: 1rem;
}
.header--title{
  color: #cc610a;
  font-weight:600;
}
.header--title h1{
  color: #cc610a;
  font-weight:600;
}
.user--info{
  display: flex;
  align-items: center;
  gap:1rem;
}
.search--box{
  background: rgb(237, 237, 237);
  border-radius: 15px;
  color: rgba(113, 99, 186, 255);
  display: flex;
  align-items: center;
  gap:5px;
  padding: 4px 12px;
}
.search--box input {
  background: transparent;
  padding: 10px;
}
.search--box i {
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.5s ease-out;
}
.search--box i:hover {
  transform: scale(1.2);
}

/*---card container---*/
.card--container{
  background: #fff;
  padding: 2rem;
  border-radius: 10px;
}
.card--wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}
.main--title {
  color: #cc610a;
  padding-bottom: 10px;
  font-size:30px;
}
.payment--card {
  background: rgb(229, 223, 223);
  border-radius: 10px;
  padding: 1.2rem;
  width: 290px;
  height: 150px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: all 0.5s ease-in-out;
}
.payment--card :hover{
  transform:translateY(-5px)
}
.card--header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  color:#fff;
}
.amount{
  display: flex;
  flex-direction: column;
}
.title{
  font-size: 24px;
  font-weight: 600;
}
.amount--value{
  font-size: 24px;
  font-family: 'Courier New', Courier, monospace;
}
.icon {
  color: #fff;
  padding: 1rem;
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50%;
  font-size: 1.8rem;
  background: red;
}
.card-detail{
  font-size: 30px;
  font-weight:500;
  color: #000000;
  letter-spacing: 2px;
  font-family: 'Courier New', Courier, monospace;
}
/* color css */
.light-red{
  background: #ef6a7d;
}
.light-purple{
  background: #db75f1;
}
.light-green{
  background: #60c50f;
}
.light-blue{
  background: #757eea;
}
.light-aqua{
  background: #b099ca;
}
.dark-red{
  background: #ca190c;
}
.dark-purple{
  background: #b712d0;
}
.dark-green{
  background: green;
}
.dark-blue{
  background: #2a11df;
}
.dark-aqua{
  background: #7b30f7;
}

</style>
</head>

<body>
   <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
    <h3>&#8660;</h3>
        <!-- li class="active" -->
        <li> 
            <a href="category.php">
            <i class="fas fa-sitemap"></i>
                <span>Category</span>
            </a>
        </li>
        <li>
            <a href="userlist.php">
            <i class="fas fa-users"></i> 
                <span>User</span>
            </a>
        </li>
        <li>
            <a href="itemlist.php">
            <i class="fas fa-list"></i>
                <span>Item</input></span>
            </a>
        </li>
        </li>
        <li>
            <a href="order-mgmt.php">
            <i class="fas fa-clipboard"></i>
                <span>Order</span>
            </a>
        </li>
        <li>
            <a href="feedbacklist.php">
            <i class="fas fa-message"></i>
                <span>Feedback</span>
            </a>
        </li>     
   </div> 


   <div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h1>Goal Gist</h1>
            <span>Sport Equipment Shop</span>
            <a href="Logout.php">Logout</a>
        </div>

        <div class="user--info">  
          <span>
            <a href="dashboard.php" title="Home">
            <i style='font-size:38px; color:#cc610a;'  class="fas fa-house" ></i>
            </a>
          </span>
        <span>
            <a href="logout.php" title="Logout">
            <i style='font-size:38px; color:#cc610a;' class="fas fa-sign-out-alt"></i>   
            </a>
        </span>
        </div>
    </div>
    
    <div class="card--container">
        <h2 class="main--title">Welcome Admin,
            <span class="text-danger">
              <?php 
                if(isset($_SESSION['admin'])){echo $_SESSION['admin'];}
                else{$_SESSION['admin']='';}
              ?>
            </span>
        </h2>

        <div class="card--wrapper">
            <div class="payment--card light-red">
                <div class="card--header">
                    <div class="amount">
                     <span class="title">Category </span>
                     <span class="amont-value">Rating</span>
                    </div> 
                    <i class="fas fa-sitemap icon dark-red"></i>     
                </div>
                  <span class="card-detail">
                  <?php
                    $total="select * from category";
                    $get_total=mysqli_query($conn,$total);
                    $num=mysqli_num_rows($get_total);
                    echo $num;
                  ?>
                </span>
            </div>


            <div class="payment--card light-green">
                <div class="card--header">
                    <div class="amount">
                     <span class="title">User</span>
                     <span class="amont-value">Rating</span>
                </div> 
                 <i class="fas fa-users icon dark-green"></i>   
            </div>
            <span class="card-detail">
                <?php
                    $total="select * from user ";
                    $get_total=mysqli_query($conn,$total);
                    $num=mysqli_num_rows($get_total);
                    echo $num;
                ?>  
                    </span>
            </div>


            <div class="payment--card light-blue">
                <div class="card--header">
                    <div class="amount">
                     <span class="title">Item </span>
                     <span class="amont-value">Rating</span>
                </div> 
                <i class="fas fa-list icon dark-blue"></i>    
            </div>
            <span class="card-detail">
                <?php
                    $total="select * from item";
                    $get_total=mysqli_query($conn,$total);
                    $num=mysqli_num_rows($get_total);
                    echo $num;
                ?>  
                </span>
            </div>



            <div class="payment--card light-purple">
                <div class="card--header">
                    <div class="amount">
                     <span class="title">Order </span>
                     <span class="amont-value">Rating</span>
                </div>
                <i class="fas fa-clipboard icon dark-purple"></i>     
            </div>
            <span class="card-detail">
            <?php
                    $total="select * from orders";
                    $get_total=mysqli_query($conn,$total);
                    $num=mysqli_num_rows($get_total);
                    echo $num;
                    
                    ?> 
                    </span>
            </div>




            <div class="payment--card light-aqua">
                <div class="card--header">
                    <div class="amount">
                     <span class="title">Feedback</span>
                     <span class="amont-value">Rating</span>
                </div> 
                 <i class="fas fa-check icon dark-aqua"></i>    
            </div>
            <span class="card-detail"><?php
                    $total="select * from feedback";
                    $get_total=mysqli_query($conn,$total);
                    $num=mysqli_num_rows($get_total);
                    echo $num;
                    
                    ?> </span>
            </div>

        </div>
    </div>

       
        </div>



   </div>
</body>
</html>
