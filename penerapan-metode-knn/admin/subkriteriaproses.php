<?php
include'header.php';
if (isset($_GET['proses'])) {
    if ($_GET['proses']=='prosestambah') { 
        $kode_subkriteria=$_POST['kode_subkriteria'];
        $nama_subkriteria=$_POST['nama_subkriteria'];
        $kode_kriteria=$_POST['kode_kriteria'];
        $nilai_subkriteria=$_POST['nilai_subkriteria'];

        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"INSERT into tbl_subkriteria(kode_subkriteria,nama_subkriteria,kode_kriteria,nilai_subkriteria) values('$kode_subkriteria','$nama_subkriteria','$kode_kriteria','$nilai_subkriteria')");
        header("location:subkriteria.php?kode_kriteria=$_POST[kode_kriteria]");   


    }elseif ($_GET['proses']=='prosesubah') { 
        $kode_subkriteria=$_POST['kode_subkriteria'];
        $nama_subkriteria=$_POST['nama_subkriteria'];
        $kode_kriteria=$_POST['kode_kriteria'];
        $nilai_subkriteria=$_POST['nilai_subkriteria'];
    
        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"UPDATE tbl_subkriteria set nama_subkriteria='$nama_subkriteria',kode_kriteria='$kode_kriteria',nilai_subkriteria='$nilai_subkriteria' WHERE kode_subkriteria='$kode_subkriteria'");
        header("location:subkriteria.php?kode_kriteria=$_POST[kode_kriteria]");   

    }elseif ($_GET['proses']=='proseshapus') { 
        $kode_subkriteria=$_GET['kode_subkriteria'];
        $kode_kriteria=$_GET['kode_kriteria'];


        $con=mysqli_connect("localhost","root","","metode_knn");
        $query=mysqli_query($con,"DELETE FROM tbl_subkriteria WHERE kode_subkriteria='$kode_subkriteria'");
        header("location:subkriteria.php?kode_kriteria=$_GET[kode_kriteria]");   


    }
}
?>
