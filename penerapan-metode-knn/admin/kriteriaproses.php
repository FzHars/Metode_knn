<?php
include'header.php';
if (isset($_GET['proses'])) {
    if ($_GET['proses']=='prosestambah') { 
        $kode_kriteria=$_POST['kode_kriteria'];
        $nama_kriteria=$_POST['nama_kriteria'];
        $keterangan=$_POST['keterangan'];

        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"INSERT into tbl_kriteria(kode_kriteria,nama_kriteria,keterangan) values('$kode_kriteria','$nama_kriteria','$keterangan')");
        header("location:kriteria.php");   


    }elseif ($_GET['proses']=='prosesubah') { 
        $kode_kriteria=$_POST['kode_kriteria'];
        $nama_kriteria=$_POST['nama_kriteria'];
        $keterangan=$_POST['keterangan'];
    
        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"UPDATE tbl_kriteria set nama_kriteria='$nama_kriteria',keterangan='$keterangan' WHERE kode_kriteria='$kode_kriteria'");
        header("location:kriteria.php");

    }elseif ($_GET['proses']=='proseshapus') { 
        $kode_kriteria=$_GET['kode_kriteria'];


        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"DELETE FROM tbl_kriteria WHERE kode_kriteria='$kode_kriteria'");
        $query=mysqli_query($con,"DELETE FROM tbl_subkriteria WHERE kode_kriteria='$kode_kriteria'");
        header("location:kriteria.php");


    }
}
?>
