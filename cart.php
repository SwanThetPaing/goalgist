<?php
session_start();
include 'conn.php';
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<style>

#heading 
{
    color: white;
}

.black 
{
    background-color: black;
}

#body2 
{
    background-image: url(sport26.jpg);
}

#nav 
{
    width: 100%;
    height: 65px;
    color: yellow;
    background-color: black;
    padding-top: 18px;
}

#a 
{
    color: yellow;
    font-size: 20px;
    text-decoration: none;
    padding: 20px;
}

#a:hover
{
    color: black;
    background-color: yellow;
    font-size: 20px;
    text-decoration: none;
    padding: 20px;
}

#logo 
{
    width: 100%;
    height: 43px;
    color: red;
    background-color: black;
    border: 2px solid red;
    border-radius: 4px;
    padding: 10px;
    font-size: 20px;
    margin-left: 650px;
}

#logo:hover
{
    width: 100%;
    height: 43px;
    color: red;
    background-color: black;
    border: 2px solid yellow;
    border-radius: 4px;
    padding: 10px;
    font-size: 20px;
    margin-left: 650px;
}

#body 
    {
        width: 100%;
        height: 100%;
        align: center;
        padding: 10px;
        background-color: black;
        margin-left: 440px;
        margin: 0 auto;
        margin-top: 18px;
        border-radius: 3px;
	    position: relative;
	    background: linear-gradient(0deg, #000, #272727);
    }

    #body:before, #body:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        background: linear-gradient(45deg, gold, yellow, blue, yellow, gold, yellow, 
            red, yellow, gold, yellow);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation: steam 40s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    #body:after 
    {
        filter: blur(50px);
    }

#welcome 
{
    color: black;
    background-color: lightblue;
}

#welcomepanda 
{
    margin-bottom: 20px;
}

#shopcart
{
    color: black;
    background-color: grey;
}

#tbody 
{
    color: Black;
    background-color: Gainsboro;
    padding: 20px;
}

#tfoot 
{
    background-color: Gainsboro;
    color: Black;
}

#shopbody 
{
    background-color: Gainsboro;
}

#shop {
  transform:
    scale(0.75)
    rotateY(-20deg)
    rotateX(15deg)
    translateZ(4.5rem);
  transform-origin: 20% 100%;
  transform-style: preserve-3d;
  box-shadow: 1rem 1rem 2rem rgba(0,0,0,0.25);
  transition: 0.6s ease transform;
  margin-top: 20px;

  &:hover {
    transform: scale(1);
  }

  &::before {
    transform: translateZ(4rem);
    &:hover {
      transform: translateZ(0);
    }
  }

  &::after {
    transform: translateZ(-4rem);
    &:hover {
      transform: translateZ(-1px);
    }
  }
}

#form 
    {
        width: 500px;
        height: 440px;
        align: center;
        padding: 10px;
        background-color: black;
        margin-left: 440px;
        margin: 0 auto;
        margin-top: 18px;
        border-radius: 5px;
	    position: relative;
	    background: linear-gradient(0deg, #000, #272727);
    }

    #form:before, #form:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
            #0000ff, #00ff00,#ffff00, #ff0000);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation: steam 20s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    #form:after 
    {
        filter: blur(50px);
    }

    #clearcart:hover 
    {
        background-color: red;
    }

    #back:hover
    {
        background-color: lightgray;
    }

    #confirmorder 
    {
        background-color: green;
    }

    #confirmorder:hover
    {
        color: white;
        background-color: blue;
    }

    .showname
    {
        padding: 10px;
    }

</style>

<body id="body2">

   <?php include "header.php";
   ?>


<div class="container mt-3" id="body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header" id="welcome">
                    <h3 ><img src="Photo/99.png" width="100px" height="65px" alt="">
                        <span class="showname">
                            <?php 
                            if (!empty($_SESSION['user'])) {
                                echo $_SESSION['user'];
                            } else {
                                $_SESSION['user'] = '';
                                echo "no";
                            } 
                            ?>
                        </span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center" id="shopcart">
                                <h2>&#128722; Shopping Cart &#128722;</h2>
                            </div>
                            <?php if (!empty($_SESSION['cart'])) : ?>
                                <div class="card-body">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr class="black">
                                                <th class="black" id="heading">Photo</th>
                                                <th class="black" id="heading">Name</th>
                                                <th class="black" id="heading">Quantity</th>
                                                <th class="black" id="heading">Unit Price</th>
                                                <th class="black" id="heading">Price</th>
                                                <th class="black" id="heading">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $total = 0;
                                            foreach ($_SESSION['cart'] as $id => $qty) {
                                                $id = mysqli_real_escape_string($conn, $id);
                                                $result = mysqli_query($conn, "SELECT * FROM item WHERE itemid='$id'");

                                                if ($result) {
                                                    $row = mysqli_fetch_assoc($result); 
                                            ?>
                                                    <tr>
                                                        <td id="tbody"><img src="photo/<?php  echo $row['photo'] ?>" width="100" height="100" class="img img-thumbnail" /></td>
                                                        <td id="tbody"><?php echo $row['itemname'] ?></td>
                                                        <td id="tbody">
                                                            <?php echo $qty ?>
                                                            <span >
                                                                <a href="change-qty.php?id=<?php echo $id; ?>&action=increase" class="btn btn-outline-primary btn-sm">+</a>
                                                               <a href="change-qty.php?id=<?php echo $id; ?>&action=decrease" class="btn btn-outline-secondary btn-sm">-</a>

                                                            </span>
                                                        </td>
                                                        <td id="tbody">MMK-<?php  echo $row['price'] ?></td>
                                                        <td id="tbody">MMK-<?php echo $row['price'] * $qty ?></td>
                                                        <td id="tbody">
                                                            <a href="remove.php?id=<?php echo $id ?>" class="btn btn-outline-danger btn-sm">Remove</a>
                                                        </td>
                                                    </tr>
                                            <?php 
                                                    $total += $row['price'] * $qty;
                                                } else {
                                                    echo "Error in query: " . mysqli_error($conn);
                                                }
                                            } 
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td id="tfoot"colspan="4" align="right"><b>Total:</b></td>
                                                <td id="tfoot">MMK-<?php  echo $total; ?></td>
                                                <td id="tfoot"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="clear.php" class="btn btn-danger" id="clearcart">Clear Cart</a>
                                    <a href="product.php" class="btn btn-default" id="back">Back</a>
                                    <a href="submit-order.php" class="btn btn-default" id="confirmorder">Confirm Order</a>
                                </div>
                            <?php else : ?>
                                <div class="card-body" id="shopbody">
                                    <h3 class="text-danger lead text-center"><b>You have not selected any products yet!</b></h3>
                                    <p class="text-center"><a href="product.php" id="shop" class="btn btn-primary">Shop Now</a></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
