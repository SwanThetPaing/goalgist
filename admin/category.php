<?php 

session_start();
include 'conn.php';
include 'function.php';

if(isset($_POST['btncategory']))
{
    insert_category();
}
if(isset($_GET['action']) && $_GET['action'] == 'delete')
{
    delcat();
}
if(isset($_POST['btnupcategory']))
{
    updatecategory();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

#addandupdate
{
    background-color: #F8F8FF;
    padding:10px;
    border: 2px ;
    border-radius: 10px;
}

#list 
{
    height: 100%;
    background-color: #F8F8FF;
    padding-top: 15px;
    border: 2px ;
    border-radius: 10px;
}

#add 
{
    color: black;
}

#update 
{
    color: black;
}

#addandupdatebutton 
{
    color: #343a40;
    background-color: lightblue;
    border-radius: 5px;
}

#addandupdatebutton:hover
{
    color: #343a40;
    background-color: #66ffff;
}


#edit:hover
{
    color: blue;
 
}


#delete:hover
{
    background-color: red;
}


</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<body>
    <?php include 'header.php' ?>
    <div class="container mt-4">

        <div class="row">
            <div class="col-md-12">
                <h3>Welcome Admin, <img src="../photo/admin01.jpg" width="100px" height="100px" ; alt="" srcset="">
                    <span class="text-danger">



                    </span>
                </h3>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-5">
                <form action="" method="post" id="addandupdate">
                    <div class="form-group mb-3">
                        <label for="" class="form-label" id="add">Add Category</label>
                        <input type="text" name="category" class="form-control" id="">
                    </div>
                    <div>
                        <button class="" id="addandupdatebutton" name="btncategory" type="submit">Add Category</button>
                    </div>
                </form>
                <hr>
                <?php 
                    if(isset($_GET['action']) && $_GET['action'] == 'edit')
                    {
                        $catid = $_GET['cid'];
                        $query = "Select * from category where catid='$catid'";
                        $go_query = mysqli_query($conn, $query);
                        while($out = mysqli_fetch_array($go_query))
                        {
                            $catname = $out['catname'];
                ?>
                <form action="" method="post" id="addandupdate">
                    <div class="form-group mb-3">
                        <label for="" class="form-label" id="update">Update Category</label>
                        <input type="text" name="updatecategory" class="form-control" value="<?php echo $catname ?>" id="">
                    </div>
                    <div>
                        <button class="" id="addandupdatebutton" name="btnupcategory" type="submit">Update Category</button>
                    </div>
                </form>
                <?php 
                        }
                    }
                ?>
            </div>

            <div class="col-md-6" id="list">
               <table class="table table-hover">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>

                    <?php 

                     $query = "Select * from category";
                        $go_query = mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($go_query))
                        {
                            $catid = $row['catid'];
                            $catname = $row['catname'];
                            echo "<tr>";
                            echo "<td>{$catid}</td>";
                            echo "<td>{$catname}</td>";
                            echo "<td><a href='category.php?action=edit&cid={$catid}' id='edit'><i style='font-size:24px' class='far'>&#xf044;</i></a> <a href='category.php?action=delete&cid={$catid}' class='btn btn-outline-danger' id='delete'><i style='font-size:24px' class='far'>&#xf057;</i>
                            </a> </td>";
                            echo "</tr>";
                        }

                    ?>  

               </table>
            </div>

        </div>
        




    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>