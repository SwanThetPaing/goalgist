<?php
function insert_category(){
    global $conn;
    global $msg;
    $catname=$_POST['category'];
    if($catname=="")
    {
        echo "<script>window.alert('Please Category Name')</script>";
    }
    elseif($catname!="")
    {
        $query="Select * from category where catname='$catname'";
        $ch_query=mysqli_query($conn,$query);
        $count=mysqli_num_rows($ch_query);
        if($count>0)
        {
            echo "<script>window.alert('This record is already exist.')</script>";
        }
        else
        {
            $query="insert into category(catname)values('$catname')";
            $go_query=mysqli_query($conn,$query);
            if(!$go_query)
            {
                die("QUERY FAILED".mysqli_error($conn));
            }
            else
            {
                echo "<script>window.alert('Save Successfully')</script>";
            }
        }
    }
}
function  updatecategory(){
    global $conn;
    $catname=$_POST['updatecategory'];
    $catid=$_GET['cid'];
    $query="update category set catname='$catname' where catid='$catid'";
    $go_query=mysqli_query($conn,$query);
    if(!$go_query){
        die("QUERY FAILED".mysqli_error($conn));
    }
    header("location:category.php");
}
function delcat(){
    global $conn;
    $catid=$_GET['cid'];
    $query="delete from category where catid='$catid'";
    $go_query=mysqli_query($conn,$query);
    header("location:category.php");
}
function additem(){
    global $conn;
    $itemname=$_POST['itemname'];
    $categoryid=$_POST['category'];
    $price=$_POST['price'];
    $quantity=$_POST['qty'];
    $photo=$_FILES['photo']['name'];
    if(is_numeric($price)==false){
        echo "<script>window.alert('please enter price is numeric value')</script>";       
    }
    elseif(is_numeric($quantity)==false){
        echo "<script>window.alert('please enter product quantity is numeric value')</script>";
    }
    elseif($photo=="")
    {
        echo "<script>window.alert('Choose Product Images')</script>";
    }
    elseif($itemname!="" && $photo!=""){
        $query="Select * from item where itemname ='$itemname'";
        $ch_query=mysqli_query($conn,$query);
        $count=mysqli_num_rows($ch_query);
        if($count>0){
            echo "<script>window.alert('Already Exist')</script>";
        }
        else
        {
            $query="insert into item(itemname,catid,price,qty,photo) values ('$itemname','$categoryid','$price','$quantity','$photo')";
            $go_query=mysqli_query($conn,$query);
            if(!$go_query){
                die("Query Failed".mysqli_error($conn));
            }
            else{
                move_uploaded_file($_FILES['photo']['tmp_name'],'../Photo/'.$photo);
                header("location:itemlist.php");
            }
        }

    }
}
function del_item()
{
    global $conn;
    $pid=$_GET['pid'];
    $query="Delete from item where itemid='$pid' ";
    $go_query=mysqli_query($conn,$query);
   
}
function update_item()
{
    global $conn;
    $pid=$_GET['pid'];
    $itemname=$_POST['itemname'];
    $categoryid=$_POST['category'];
    $price=$_POST['price'];
    $quantity=$_POST['qty'];
    $photo=$_FILES['photo']['name'];
    if(!$photo)
    {
        $query="update product set itemname='$itemname',categoryid='$categoryid',price='$price',qty='$quantity' where productid='$pid'";
    }
    else
    {
        $query="update product set itemname='$itemname',categoryid='$categoryid',price='$price',qty='$quantity',photo='$photo' where productid='$pid'";
    }
    $go_query=mysqli_query($conn,$query);
    if(!$go_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
    else
    {
        move_uploaded_file($_FILES['photo']['tmp_name'],'../Photo/'.$photo);
    }
    header("location:itemlist.php");
}
function adminlogin(){
    global $conn;
    
    $name=$_POST['username'];
    $password=$_POST['password'];
    $hpass=md5($password);
    $query="Select * from user";
    $go_query=mysqli_query($conn,$query);
    while($out=mysqli_fetch_array($go_query))
    {
        $db_user_name=$out['username'];
        $db_password=$out['password'];
        $db_user_role=$out['role'];
        if($db_user_name==$name && $db_password==$hpass && $db_user_role=='admin')
        {
            $_SESSION['admin']=$name;
            header('location:dashboard.php');
        }
        else
        {
            echo "<script>window.alert('Invalid Admin Name and Password')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }
}
function adduser()
{
    global $conn;
    $username=$_POST['username'];
    //check password match (start)
    $password=$_POST['password'];
    $confirmpassword=$_POST['cpassword'];
    if($password!=$confirmpassword)
    {
        echo "<script>window.alert('Password and Confirm Password are must be same')</script>";
        //check password match (end)
    }
    
    // check record duplicate (start)
    else if($password!="" && $username!="")
    {
        $query="Select * from user where username='$username' and password='$password'";
        $ch_query=mysqli_query($conn,$query);
        $count=mysqli_num_rows($ch_query);
        if($count>0)
        {
            echo "<script>window.alert('Username & Password is already exists!')</script>"; 
        }
        
        // check record duplicate (end)
        else
        //insert record user table
        {
            $hashvalue=md5($password);
            $user_role=$_POST['usertype'];
            $query="insert into user(username,password,role)values('$username','$hashvalue','$user_role')";
            $go_query=mysqli_query($conn,$query);
            if(!$go_query)
            {
                die("QUERY FAILED ".mysqli_error($conn));
            }
            header("location:userlist.php");
            
        }
        
    }
}
function deluser()
{
    global $conn;
    $uid=$_GET['id'];
    $query="delete from user where userid='$uid'";
    $go_query=mysqli_query($conn,$query);
    header("location:userlist.php");
}
?>
