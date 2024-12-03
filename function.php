<?php
function show_result()
{
  global $conn;
    $data =$_POST['search'];
    $query="Select * from item where itemname LIKE '%$data%'";
    $go_query=mysqli_query($conn,$query);
    $count_result=mysqli_num_rows($go_query);
    print-r($count_result);    dd();
    if($count_result==0)
    {
           echo '<div class="blockquote">Sorry, No result found!<a href="index.php">Back</a></div>';
    }
    elseif($count_result>0)
    {
     while($out=mysqli_fetch_array($go_query))
     {
         $itemid=$out['itemid'];
         $itemname=$out['itemname'];
         $categoryid=$out['catid'];
         $price=$out['price'];
         $qty=$out['qty'];
         $photo=$out['photo'];
      
         $display='<div class="col-md-4 col-sm-4">';
         $display.='<div class="card" height="300px">';
         $display.='<img src="Photo/{$photo}" class="card-img-top">';
         $display.='<div class="card-body">';
         $display.='<h3>{$itemname}</h3>';
         $display.='<p>{$price}</p>';
         $display.='<p class="text-center"><a href="Addtocart.php?id='.$itemid.'" class="btn btn-info">Add to Cart</a></p>';
         $display.='</div></div></div>';
         echo $display;
     }
    }

 }
function create_accu(){
    global $conn;
    global $user_name;
    global $password;
    global $email;
    global $phone;
    global $address;

    $hpass=md5($password);
    $query="select * from user where username='$user_name' and password='$hpass'";
    $user_query=mysqli_query($conn,$query);
    $count=mysqli_num_rows($user_query);
      if($count>0)
        {
          echo "<script>window.alert('already exists')</script>";
        }
        else
        {
          $query="insert into user (username,password,email,phone,address,role)";
          $query.="values ('$user_name','$hpass','$email','$phone','$address','user')";
          $go_query=mysqli_query($conn,$query);
            if(!$go_query)
            {
              die("QUERY FAILED".mysqli_error($conn));
            }
            else
                    {
                        echo "<script>window.alert('you successfully created an account')</script>";
                    }
              }
}
?>