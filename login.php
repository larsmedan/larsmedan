
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div
    class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
    id="template-bg-3">
    <div class="card mb-5 p-5  bg-dark bg-gradient text-white col-md-4">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>
        <div class="card-body mt-3">
            <form action="" method="post">
                <div class="input-group form-group mt-3">
                    <input type="text"
                        class="form-control text-center p-3"
                        placeholder="Username" name="username">
                </div>
                <div class="input-group form-group mt-3">
                    <input type="password"
                        class="form-control text-center p-3"
                        placeholder="Password" name="password">
                </div>
                <div class="text-center">
                    <input type="submit" value="Login" 
                        class="btn btn-primary mt-3 w-100 p-2"
                        name="loginbtn">
                        <a href="regis.php"  class="btn btn-secondary mt-3 w-100 p-2">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<style>
    body{
       background-color: blueviolet;
    }
</style>
<?php
if (isset($_POST['loginbtn'])){
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
 
$login = mysqli_query($conn,"select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	if($data['status']=="User"){
 
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "User";
        header("location: index.php");

 
	}else if($data['status'] == "Admin"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Admin";
        header("location:admin/index.php");

 
	}else{
        echo "<script>alert('Tidak Berhasil Login.Status Tidak ditemukan')</script>";
        header("location:login.php");
		echo "<script>location='login.php';</script>";
	}	
}
}
?>