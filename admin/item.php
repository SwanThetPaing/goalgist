<?php
session_start();
include 'conn.php';
include 'function.php';
if(isset($_POST['additem']))
{
    additem();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
 <?php include 'header.php' ?>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Welcome Admin,
                <span class="text-danger">
                <?php 
                            if(isset($_SESSION['admin'])){echo $_SESSION['admin'];}
                            else{$_SESSION['admin']='';}
                        ?>
                </span>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" name="itemname" id="" class="form-control" require>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <select name="category" id="" class="form-select">
                        <option value="">-----Select One-----</option>
                        <?php
                        $query="Select * from category";
                        $go_query=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($go_query))
                        {
                            $catid=$row['catid'];
                            $catname=$row['catname'];
                        {
                            echo "<option value={$catid}>{$catname}</option>";
                        }
                        }     
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" id="" class="form-control" require>
                </div>
                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" name="qty" id="" class="form-control" require>
                </div>
                <div class="mb-3">
                    <label class="form-label">File Input</label>
                    <input type="file" name="photo" id="" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <input type="submit" name="additem" value="Submit" class="btn btn-outline-info">
                </div>
                
            </form>
            <hr>
            
        </div>
        
    </div>
 </div>
















</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>