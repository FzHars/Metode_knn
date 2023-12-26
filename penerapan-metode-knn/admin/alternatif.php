<?php
include'header.php';
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <h4>ALTERNATIF</h4> </ol>
    </div>
    <div class="panel panel-container">
        <div class="bootstrap-table">
            <a href="alternatifaksi.php?aksi=tambah" class="btn btn-primary"> + Tambah Data</a>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Alternatif</th>
                        <th class="text-center">Training</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                         $con=mysqli_connect("localhost","root","","metode_knn");
                         $data=mysqli_query($con,"SELECT * FROM tbl_alternatif order by kode_alternatif asc
                           ");
                        $no=1;
                        while ($a mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                             ?>
                             <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $a['nama_alternatif']?></td>

                                <td class="text-center">
                                    <a href="training.php?kode_alternatif=<?php echo  $a['
                                    kode_alternatif'] ?>" class="btn btn-primary">Training</a>
                                </td>    

                                <td class="text-center">
                                    <a href="alternatifaksi.php?kode_alternatif=<?php echo  $a['
                                    kode_alternatif'] ?>&aksi=ubah" class="btn btn-sucess">Ubah</a>

                                     <a href="alternatifproses.php?kode_alternatif=<?php echo  $a['
                                    kode_alternatif'] ?>&proses=proseshapus" class="btn btn-danger">Hapus</a>
                                    Hapus</a>
                                </td>    
                             </tr>
                        <?php } ?> 
                    </tbody>
                </table>  
            </div>  


                
           
        </div>
    </div>
</div>