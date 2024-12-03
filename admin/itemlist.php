<?php
session_start();
include 'conn.php';
include 'function.php';?>
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
    <div class="container Top">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="page-header">
                        <h2>Welcome Admin,
                            <span class="text-danger">
                                <?php if(isset($_SESSION['admin'])){
                                echo $_SESSION['admin'];
                                } 
                                 else{$_SESSION['admin']="";}  
                                ?>
                             </span>
                        </h2>
                </div> </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <tr>
                                        <td colspan="7" align="right">
                                            <a href="item.php" class="btn btn-success">
                                                <span class="glyphicon glyphicon-plus"></span>Add Item</a>
                                        </td>
                                     </tr>
                                     <tr>
                                        <th>Photo</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Action</th>
                                     </tr>
                                     <?php 
                                  if(isset($_GET['action'])&& $_GET['action']=='delete')
                                  {
                                    del_item();
                                    }
                                    $query="Select item.*,category.* from item,category where item.catid=category.catid order by itemid desc";
                                    $go_query=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_array($go_query)){
                                    $item_id=$row['itemid'];
                                    $item_name=$row['itemname'];
                                     $cat_name=$row['catname'];
                                     $price=$row['price'];
                                     $qty=$row['qty'];
                                     $photo=$row['photo'];
                                     echo "<tr>";
                                     echo "<td><img src='../Photo/{$photo}' width='100' height='100'></td>";
                                    echo "<td>{$item_id}</td>";
                                    echo "<td>{$item_name}</td>";
                                    echo "<td>{$cat_name}</td>";
                                     echo "<td>{$price}</td>";
                                    echo "<td>{$qty}</td>";
                                    echo "<td>
                                           <a href='itemlist.php?action=delete&pid={$item_id}'class='btn btn-danger' onclick='return confirm('Are you sure?')<i id='delete'><i style='font-size:24px' class='far'>&#xf057;</i></a> 
                                           <a href='edit.php?action=edit&pid={$item_id}' class='btn btn-info'><id='edit'><i style='font-size:24px' class='far'>&#xf044;</i></a></td>";
                                    echo "</tr>";
                                    }
                                ?> 
                </table>
                                </div>
            </div>
        </div>
    </div>
</body>
    </html>     