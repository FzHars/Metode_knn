<?php
include'header.php';
?>

<div class="container">
    <div class="row">
    <?php
        $con=mysqli_connect("localhost","root","","metode_knn");
        $data=mysqli_query($con,"SELECT * FROM tbl_kriteria where kode_kriteria='$_GET[kode_kriteria]'");
        $a=mysqli_fetch_array($data);
        ?>
        <ol class="breadcrumb">
            <h4>SUBKRITERIA / <a href="kriteria.php"> <?php echo $a['nama_kriteria'] ?> </a></h4></ol>
    </div>
    <div class="panel panel-container">
        <div class="bootstrap-table">
            <a href="subkriteriaaksi.php?aksi=tambah&kode_kriteria=<?php echo $_GET['kode_kriteria'] ?>" class="btn btn-primary"> + Tambah Data</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Subkriteria</th>
                        <th class="text-center">Nilai </th>
                        <th class="text-center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $con=mysqli_connect("localhost","root","","metode_knn");
                         $data=mysqli_query($con,"SELECT * FROM tbl_kriteria a, tbl_subkriteria b where a.kode_kriteria=b.kode_kriteria and b.kode_kriteria='$_GET[kode_kriteria]' order by b.kode_subkriteria asc");
                         
                         
                        $no=1;
                        while ($a=mysqli_fetch_array($data)) {
                             ?>
                             <tr>
                                <td class="text-center"><?php echo $no++; ?></td>
                                <td class="text-center"><?php echo $a['nama_subkriteria']?></td>
                                <td class="text-center"><?php echo $a['nilai_subkriteria']?></td>

                                <td class="text-center">
                                    <a href="subkriteriaaksi.php?kode_kriteria=<?php echo  $a['kode_kriteria'] ?>&kode_subkriteria=<?php echo  $a['kode_subkriteria'] ?>&aksi=ubah" class="btn btn-success">Ubah</a>

                                     <a href="subkriteriaproses.php?kode_kriteria=<?php echo  $a['kode_kriteria'] ?>&kode_subkriteria=<?php echo  $a['kode_subkriteria'] ?>&proses=proseshapus" class="btn btn-danger">Hapus</a>
                                
                                </td>    
                             </tr>
                        <?php } ?> 
                    </tbody>
                </table>  
            </div>  


                
           
        </div>
    </div>
</div>