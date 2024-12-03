<?php
session_start();
include 'conn.php';
include 'function.php';

if (isset($_POST['register'])) //register button name
{
    $user_name = $_POST['username'];//textbox name
    $password = $_POST['password'];//textbox name
    $confirm_password = $_POST['confirmpassword'];//textbox name
    $email = $_POST['email'];//textbox name
    $phone = $_POST['phone'];//textbox name
    $address = $_POST['address'];//textbox name

    $errors = array(
        'username' => '',
        'password' => '',
        'confirm_password' => '',
        'match_password' => '',
        'email' => '',
        'phone' => '',
        'address' => '',
    );

    if (empty($user_name)) {
        $errors['username'] = 'User Name must be entered';
    } else {
        if (strlen($user_name) < 3) {
            $errors['username'] = 'User Name needs to be longer';
        }
    }

    if (empty($password)) {
        $errors['password'] = 'This field could not be empty';
    } else {
        if (strlen($password) < 3) {
            $errors['password'] = 'Password needs to be longer';
        }
    }

    if (empty($confirm_password)) {
        $errors['confirm_password'] = 'This Field could not be empty';
    } else {
        if ($password != $confirm_password) {
            $errors['match_password'] = 'Password Do not match';
        }
    }

    if (empty($email)) {
        $errors['email'] = 'This field could not be empty';
    }

    if (empty($phone)) {
        $errors['phone'] = 'This field could not be empty';
    }

    if (empty($address)) {
        $errors['address'] = 'This field could not be empty';
    }

    foreach ($errors as $key => $value) {
        if (empty($value)) {
            unset($errors[$key]);
        }
    }

    if (empty($errors)) {
        create_accu();
        header('location:admin/dashboard.php');
        alert("Welcome". $user_name);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
  {
    
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
  }
  body{
    background:url(photo/bg.jpg) no-repeat;
    background-position:center;
    background-size:cover;
    min-height:100vh;
    width:100%;
  }
  .container{
    display:flex;
    justify-content:center;
    align-item:center;
    min-height:70vh;
  }
  .form-box{
  position:relative;
  width:600px;
  top: 50%;
  border:2px solid rgba(255,255,255,0.5);
  border-radius:20px;
  backdrop-filter:blur(15px);
  display:flex;
  justify-content:center;
  align-items:center;
  }
  .form-box h2{
    color:#fff;
    text-align:center;
    font-size:32px;
  }
.form-box .input-box{
  position:relative;
  margin:40px 0;
  width:410px;
  border-bottom:2px solid #fff;
}
.form-box .input-box input{
  width:100%;
  height:45px;
  background:transparent;
  border:none;
  outline:none;
  padding:0 20px 0 5px;
  color:#fff;
  font-size:16px;
}
 i{
  color:#fff;
  font-size:24px;
  position:absolute;
  top:13px;
  right:0;
}
input::placeholder{
  color:#fff;
}
.btn{
  color:#fff;
  background:blue;
  width:100%;
  height:50px;
  border-radius:px;
  outline:none;
  border:none;
  font-size:17px;
  cursor:pointer;
  box-shadow:3px 0 10px rgba(0,0,0,.5);
}
.group{
  display:flex;
  justify-content:space-between;
}
.group span a{
  color:#fff;
  position:relative;
  top:10px;
  text-decoration:none;
  font-weight:500;
}
.group a:focus{
  text-decoration: underline;
}
</style>

</head>
<body>
<?php include 'header.php'; ?>

  <div class="container">
    <div class="form-box">
      <form action="#" method="post" name="Formfill" >
        <h2>Register</h2>
        <div class="input-box">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username"value="<?php echo isset($user_name) ? $user_name : ''; ?>">
    <label class="text-danger"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?> </label>
  </div>

  <div class="input-box">
    <i class="fas fa-lock"></i><input type="password" name="password"placeholder="Enter your password" value="<?php echo isset($password) ? $password : ''; ?>"require>
    <label class="text-danger"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?> </label></i>
    
  </div>

  <div class="input-box">
    <i class="fas fa-key"></i>
    <input type="password" placeholder="Enter Password again" name="confirmpassword"value="<?php echo isset($confirm_password) ? $confirm_password : ''; ?>" require>
    <label class="text-danger"><?php echo isset($errors['confirm_password']) ? $errors['confirm_password'] : ''; ?> </label>
    <label class="text-danger"><?php echo isset($errors['match_password']) ? $errors['match_password'] : ''; ?> </label>
  </div>

  <div class="input-box">
    <i class="fas fa-envelope"></i>
    <input type="Eamil" placeholder="Enter your Email" name="email"value="<?php echo isset($email) ? $email : ''; ?>">
    <label class="text-danger"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?> </label>
  </div>

  <div class="input-box">
    <i class="fas fa-phone"></i>
    <input type="text" placeholder="Enter your Phone" name="phone"value="<?php echo isset($phone) ? $phone : ''; ?>">
    <label class="text-danger"><?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?> </label>
  </div>

  <div class="input-box">
  <i class="fas fa-globe"></i>
    <input type="textarea" placeholder="your Current Address" name="address"<?php echo isset($address) ? $address : ''; ?>>
    <label class="text-danger"><?php echo isset($errors['address']) ? $errors['address'] : ''; ?> </label>
  </div>
  <div class="button">
   <input type="submit" class="btn btn-warning" value="Register" name="register">
  </div>
   
        
      </form>
    </div>
  </div>
</body>
</html>