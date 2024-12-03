<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<style>
        /* Add this style to remove the underline from the category names */
        .list-unstyled li a {
            text-decoration: none;
        }
    </style>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="well">
                <h5>Blog Search</h5>
                <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                </form>
            </div>
            <hr>
            <!-- Categories -->
<div class="well">
    <h5>Categories</h5>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-unstyled">
                <?php
                $category = "SELECT * FROM category";
                $go_query = mysqli_query($conn, $category);
                while ($out = mysqli_fetch_array($go_query)) {
                    $db_cat_id = $out['catid'];
                    $db_cat_name = $out['catname'];
                    echo "<li><a href='product.php?cat_id={$db_cat_id}'>{$db_cat_name}</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

        </div>

        
            
        

        
    
</div>
</body>
</html>