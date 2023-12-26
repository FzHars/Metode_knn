<?php
include'header.php';
if (isset($_GET['proses'])) {
    if ($_GET['proses']=='prosestambah') { 
        $kode_alternatif=$_POST['kode_alternatif'];
        $NAMA_alternatif=$_POST['nama_alternatif'];

        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"INSERT into tbl_alternatif(kode_alternatif,nama_alternatif) values('$kode_alternatif','$nama_alternatif')");
        header("location:alternatif.php");   



      
    }elseif ($_GET['proses']=='prosesubah') { 
        $kode_alternatif=$_POST['kode_alternatif'];
        $NAMA_alternatif=$_POST['nama_alternatif'];

        
        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"UPDATE tbl_alternatif set nama_alternatif='$nama_alternatif' WHERE kode_alternatif='$kode_alternatif'");
        header("location:alternatif.php");

    }elseif ($_GET['proses']=='proseshapus') { 
        $kode_alternatif=$_GET['kode_alternatif'];


        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"DELET FROM tbl_alternatif WHERE kode_alternatif='$kode_alternatif'");
        header("location:alternatif.php");


    }
}
?>
