<?php
session_start();
include 'conn.php';
include 'function.php';

$getquery = "SELECT * FROM item";
$perpage = 6;
$go_query = mysqli_query($conn, $getquery);
$num = mysqli_num_rows($go_query);
$num = ceil($num / $perpage);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$show_item = ($page * $perpage) - $perpage;
?>

<!DOCTYPE html>
<html lang="en">
<style>
    #margin {
        margin : 100px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Book Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
    include 'header.php';
  ?>

    
            <!-- Right Content Area -->
        
                <div class="row row-cols-1 row-cols-md-3 g-3 mt-3" id="margin">
                    <?php
                    $query = "SELECT * FROM item LIMIT $show_item, $perpage";
                    $go_query = mysqli_query($conn, $query);

                    while ($out = mysqli_fetch_array($go_query)) {
                        $item_id = $out['itemid'];
                        $item_name = $out['itemname'];
                        $price = $out['price'];
                        $photo = $out['photo'];

                        echo "<div class='col-md-2 mb-2'>"; //--- card size ---//
                        echo "<div class='card' style=width: 18rem;>";
                        echo "<img src='Photo/{$photo}' class='card-img-top' alt='{$item_name}' width:200px;>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>{$item_name}</h5>";
                        echo "<p class='card-text'>Price: {$price}</p>";
                        echo "<a href='addtocart.php?id={$item_id}' class='btn btn-primary'>Add to Cart</a>";
                        echo "</div></div></div>";
                    }
                    ?>
                </div>
           
        </div>
    </div>

  </div>
  </div>

  <ul class="pagination justify-content-center">
        <?php
        for ($i = 1; $i <= $num; $i++) {
            $activeClass = $i == $page ? 'active' : '';
            echo "<li class='page-item {$activeClass}'><a class='page-link' href='product.php?page={$i}'>{$i}</a></li>";
        }
        ?>
    </ul>
  </body>

</html>
