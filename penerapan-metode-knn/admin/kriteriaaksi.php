<?php
include'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='tambah') { ?>

      <div class="container">
          <div class="row">
              <ol class="breadcrumb"><h4>KRITERIA / TAMBAH DATA</h4> </ol>
          </div>
          <?php 
          $con=mysqli_connect("localhost","root","","metode_knn");
          $carikode=mysqli_query($con,"SELECT max(kode_kriteria) FROM tbl_kriteria");
          $datakode=mysqli_fetch_array($carikode);
          if ($datakode) {
            $nilaikode = substr($datakode[0], 1);
            $kode = (int) $nilaikode;
            $kode = $kode + 1;
            $kode_otomatis = "K".str_pad($kode, 2, "0", STR_PAD_LEFT);
          }else{
            $kode_otomatis = "K01";
          }
          ?>

          <div class="panel panel-container">
              <div class="bootstrap-table">
                
                <form action="kriteriaproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

            
                <input type="hidden" name="kode_kriteria" class="form-control" value="<?php //kalo sudah muncul datanya text diganti hiden
                  echo $kode_otomatis ?>">

            </div>

            <div class="form-group">
                <label>Nama kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama kriteria">   
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">   
            </div>

            <div class="modal-footer">
                <a href="kriteria.php" class="btn btn-primary">Kembali</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

                </form>
              </div>
         </div>
     </div>
     <?php }else if ($_GET['aksi']=='ubah'){ ?>

        <div class="container">
          <div class="row">
              <ol class="breadcrumb"><h4>KRITERIA / UBAH DATA</h4> </ol>
          </div>

          <div class="panel panel-container">
              <div class="bootstrap-table">
                <?php 
                $con=mysqli_connect("localhost","root","","metode_knn");
                $data=mysqli_query($con,"SELECT * FROM tbl_kriteria WHERE kode_kriteria='$-GET[kode_kriteria]'");
                while ($a=mysqli_fetch_array($data)) {
                    ?>

                <form action="kriteriaproses.php?proses=prosesubah" method="post" enctype="multipart/form-data">

               <input type="hidden" name="kode_kriteria" class="form-control" value="<?php   //klo sudah muncul text diganti hiden                             
                   echo $a['kode_kriteria'] ?>"> 

            <div class="form-group">
                <label>Nama Kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" placeholder="nama kriteria" 
                value="<?php echo $a['nama_kriteria'] ?>">
   
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="keterangan" 
                value="<?php echo $a['keterangan'] ?>">
   
            </div>

            <div class="modal-footer">
                <a href="kriteria.php" class="btn btn-primary">Kembali</a>
                <input type="submit" class="btn btn-success" value="Ubah">
            </div>
        </form>

                <?php } ?>
              </div>
         </div>
     </div>

          <?php
     }
}
?>