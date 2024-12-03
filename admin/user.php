<?php
include 'conn.php';
include 'function.php';
if(isset($_POST['adduser']))
{
    adduser();
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
 <?php include 'header.php' ?>
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Welcome Admin,
                <span class="text-danger"></span>
            </h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">User Name</label> <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="" class="form-control" placeholder="Username"  required>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label> <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                <label class="form-label">Confirm Password</label> <i class="fa-solid fa-lock"></i>
                    <input type="password" name="cpassword" id="" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">User Type</label> <i class="fa-solid fa-user-plus"></i>
                    <select name="usertype" id="" class="form-control">
                        <option value="0">-----Select One-----</option>
                        <option value="admin">-----Admin-----</option>
                        <option value="user">-----User-----</option>
                    </select>
                </div>
                
                <div class="mb-3 d-grid">
                    <input type="submit" name="adduser" value="Add User" class="btn btn-outline-info">
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