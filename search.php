<?php
session_start();
error_reporting(0);
include 'function.php';
include 'conn.php';
$sql = "SELECT * FROM item ";
if(!empty($_POST['search']))
{
    $search = $_POST['search'];
    //Select * from item WHERE itemname LIKE '%$search%'
    $sql .= " WHERE itemname LIKE '%$search%'";
    
}
$query = mysqli_query($conn,$sql);
$items = mysqli_fetch_all($query,MYSQLI_ASSOC);
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
<?php
    include 'header.php';
  ?>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Welcome        
                <span>

                </span>
            </h3>
        </div>
    </div>
    <div class="row">
   <?php if($query->num_rows == 0) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <h4 class="text-center text-danger">This Item is not Found</h4>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php endif ?>

                
<?php foreach($items as $item): ?>
<div class="col-md-4">
<div class="card mb-3">
    <div class="card-body">        
        <img src="Photo/<?php echo $item['photo']  ?>" width="280px" height="230px" class="card-img-top"> <br>
        <h3> <?php echo $item['itemname'] ?></h3><br>
        <i><h5 class="d-inline">Price:</h5><b><?php echo $item['price'] ?></b></i>
        <i> (<?php echo $item['qty'] ?>)</i>
    </div>
    <div class="card-footer">
        <div class="float-end">            
            <a href="addtocart.php?id='.$item['itemid']'" class="btn btn-primary">Add-to-Cart</a>
        </div>
    </div>

</div>
</div>

<?php endforeach; ?>


   
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>


