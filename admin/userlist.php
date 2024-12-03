<?php
session_start();
include 'conn.php';
include 'function.php';
if(isset($_GET['action'])&& $_GET['action']=='delete')
{
    deluser();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, worrld!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include 'header.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Welcome Admin
                            <a href="user.php" class="btn btn-primary float-end">Add User</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <table class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>User Role</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    if(isset($_GET['id'])&& $_GET['action']=='delete'){
                        deluser();
                    }
                    $query="Select * from user order by userid desc";
                    $go_query=mysqli_query($conn,$query);
                   while($row=mysqli_fetch_array($go_query))
                   {
                    $userid=$row['userid'];
                    $username=$row['username'];
                    $role=$row['role'];
                    echo "<tr>";
                    echo "<td>{$userid}</td>";
                    echo "<td>{$username}</td>";
                    echo "<td>{$role}</td>";
                    echo "<td><a href='userlist.php?action=delete&id={$userid}' class='btn btn-danger' onclick=\"return confirm('Are you sure?')\"><i id='delete'><i style='font-size:24px' class='far'>&#xf057;</i></a> 
                                           </td>";
                    echo "</tr>";
                   } 
                ?>
                </tbody>
                            
                            
                    </table>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

                            