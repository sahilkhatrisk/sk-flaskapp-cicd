<?php
session_start();
print_r($_SESSION);

if(isset($_SESSION['email'])){
    header('Location:./index.php');
}

else{
if(isset($_POST['submit'])){

    if(($_POST['email'] == 'admin@gmail.com') && ($_POST['pass'] == '1234')){
       
        $_SESSION['email']=$_POST['email'];
        header("Location:./index.php");
        exit();
    }
    else{

        echo '<div class="alert alert-danger">Something Went Wrong!! Please Login Again </div>';
        header("Refresh: 3; URL=./login.php");
        exit();

    }
    exit();
}
}
?>

<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>

</style>
<body>
<div class="container-sm" > 

<div class="row row-cols-2 h-100 justify-content-center align-items-center">
<form class="row g-3" action="" method="post">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="email" name="email" class="form-control" id="staticEmail2" placeholder="email" required>
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="pass" class="form-control" id="inputPassword2" placeholder="Password" required> 
  </div>
  <div class="col-auto">
    <input type="submit" name='submit' value="Submit" class="btn btn-primary mb-3">
  </div>
</form>
    
</div>

</div>

</body>
</html>
