<?php
include'header.php';
if (isset($_GET['proses'])) {
    if ($_GET['proses']=='prosestambah') { 
        $kode_alternatif=$_POST['kode_alternatif'];
        $nama_alternatif=$_POST['nama_alternatif'];
        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"INSERT into tbl_alternatif(kode_alternatif,nama_alternatif) values('$kode_alternatif','$nama_alternatif')");
        header("location:alternatif.php");   


    }else if ($_GET['proses']=='prosesubah') { 
        $kode_alternatif=$_POST['kode_alternatif'];
        $nama_alternatif=$_POST['nama_alternatif'];
        $con=mysqli_connect("localhost","root","","metode_knn");
        mysqli_query($con,"UPDATE tbl_alternatif set nama_alternatif='$nama_alternatif' WHERE kode_alternatif='$kode_alternatif'");
        header("location:alternatif.php");

    }else if ($_GET['proses']=='proseshapus') { 
        $kode_alternatif=$_GET['kode_alternatif'];


        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"DELETE FROM tbl_alternatif WHERE kode_alternatif='$kode_alternatif'");
        header("location:alternatif.php");


    }
}
?>
