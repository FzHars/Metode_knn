<?php
if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='login') {
        session_start();
        include 'assets/conn/config.php';
        $username=$_POST['username'];
        $password=$_POST['password'];

        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"SELECT * from tbl_akun where username='$username' AND password='$password'"); 
        $cek=mysqli_num_rows($query);

        if ($cek > 0) {
            $data = mysqli_fetch_assoc($query);
            if ($data['level']=='Admin'){
                $_SESSION['username']=$username;
                $_SESSION['level']=$Admin;
                header("location:admin/index.php");
            }else{
                header("location:index.php?pesan=gagal");
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerapan Metode KNN</title>
    <link rel="stylesheet" type="text/css" href="assets/css/cosmo.min.css">
    <style type="text/css">
        body, html {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(assets/img/criss-cross.png);
        }
        
        .container {
            justify-content: center;
        }
        
        form {
            display: flex;
            justify-content: center;
        }

        .kotak{
            margin:100px auto;
        }

        .kotak .input-group{
            margin-left: 20px;
        }

        .text-center h3{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    if (isset($_GET['aksi'])) {
        if ($_GET['aksi']=='login') {
            echo "<div style='margin-bottom: -1px;' class='alert alert-danger' role='alert'> Login Anda gagal username dan password ada yang salah</div>";
        }
    }
    ?>
    <form action="index.php?aksi=login" method="post" enctype="multipart/form-data">
        <div class="col-md-7 col-offset-4 kotak">
            <div class="text-center">
                <h3>LOGIN SISTEM</h3>
            </div>
            <hr>
        <div class="form-group">
            <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
        <input type="submit" value="LOGIN" class="btn btn-primary">
        </div>
        </div>
    </form>
    </div>
</body>
</html>