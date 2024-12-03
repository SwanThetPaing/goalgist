<?php
session_start();
include 'conn.php';
include 'function.php';
if(isset($_GET['action'])&& $_GET['action']=='edit')
{
    $pid=$_GET['pid'];
    $query="select * from item where itemid='$pid'";
    $go_query=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $item_id=$row['itemid'];
      $item_name=$row['itemname'];
      $item_cat_id=$row['catid'];
      $price=$row['price'];
      $qty=$row['qty'];
      $photo=$row['photo'];
    }
}

function getGreeting() {
    $hour = date('H');
    if ($hour < 12) {
        return 'Good morning';
    } elseif ($hour < 18) {
        return 'Good afternoon';
    } else {
        return 'Good evening';
    }
}

// Check if the form is submitted
if (isset($_POST['update_item'])) {
    // Process the form data here
    // ...

    // Assuming the form processing was successful
    $successMessage =
'Product updated successfully!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }
    
    h3 {
        color: #007bff;
    }

    form {
        background-color: #e2edf7;
        padding: 20px;
        border-radius: 10px;
    }

    label {
        color: #007bff;
    }

    .btn-outline-info {
        color: #007bff;
        border-color: #007bff;
    }

    .btn-outline-info:hover {
        background-color: #007bff;
        color: #fff;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }
</style>
</head>
<body>
<?php
    if(isset($_POST['updateitem']))
    {
        updateitem();
    }
    ?>
    <?php include 'header.php' ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h3><?php echo getGreeting(); ?>, Admin
                <span class="text-danger">
                    <?php
                    if(isset($_SESSION['admin']))
                    {
                        echo $_SESSION['admin'];
                    }
                    else
                    {
                        $_SESSION['admin']='';
                    }
                    ?>
                </span>
            </h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <?php if (isset($successMessage)): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $successMessage; ?>
                    </div>
                <?php endif; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Item Name</label>
                        <input type="text" name="itemname" id="" value="<?php echo $item_name ?> " class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <select name="category" id="" class="form-select">
                        <?php
                        $query="select * from category";
                        $go_query=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($go_query))
                        {
                            $catid=$row['catid'];
                            $catname=$row['catname'];
                            if($item_cat_id==$catid)
                            {
                                echo"<option value={$catid} selected>{$catname}</option>";
                            }
                            else
                            {
                                echo"<option value={$catid}>{$catname}</option>";
                            }
                        }
                        ?>
                            <option value="">-----Select One-----</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" id="" value="<?php echo $price; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" name="qty" id="" value="<?php echo $qty; ?>"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File Input</label>
                        <input type="file" name="photo" id="" value="<?php echo $photo; ?>" class="form-control">
                        <img src='../photo/<?php echo $photo ?>' alt="" width="100" height="100">
                    </div>
                    <div class="mb-3 d-grid">
                        <input type="submit" name="update_product" value="Update" class="btn btn-outline-info">
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>