<?php
include'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='tambah') { ?>

      <div class="container">
          <div class="row">
              <ol class="breadcrumb"><h4>SUBKRITERIA / TAMBAH DATA</h4> </ol>
          </div>
          <?php 
          $con=mysqli_connect("localhost","root","","metode_knn");
          $carikode=mysqli_query($con,"SELECT max(kode_subkriteria) FROM tbl_subkriteria");
          $datakode=mysqli_fetch_array($carikode);
          if ($datakode) {
            $nilaikode = substr($datakode[0], 1);
            $kode = (int) $nilaikode;
            $kode = $kode + 1;
            $kode_otomatis = "S".str_pad($kode, 2, "0", STR_PAD_LEFT);
          }else{
            $kode_otomatis = "S01";
          }
          ?>

          <div class="panel panel-container">
              <div class="bootstrap-table">
                
                <form action="subkriteriaproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

            
                <input type="hidden" name="kode_subkriteria" class="form-control" value="<?php //kalo sudah muncul datanya text diganti hiden
                  echo $kode_otomatis ?>">

                <input type="hidden" name="kode_kriteria" class="form-control" value="<?php //kalo sudah muncul datanya text diganti hiden
                  echo $_GET['kode_kriteria'] ?>">

            </div>

            <div class="form-group">
                <label>Nama Subkriteria</label>
                <input type="text" name="nama_subkriteria" class="form-control" placeholder="nama subkriteria">   
            </div>

            <div class="form-group">
                <label>Nilai</label>
                <input type="text" name="nilai_subkriteria" class="form-control" placeholder="nilai">   
            </div>

            <div class="modal-footer">
                <a href="subkriteria.php?kode_kriteria=<?php echo $_GET['kode_kriteria'] ?>" class="btn btn-primary">Kembali</a>
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

                </form>
              </div>
         </div>
     </div>
     <?php }else if ($_GET['aksi']=='ubah'){ ?>

        <div class="container">
          <div class="row">
              <ol class="breadcrumb"><h4>SUBKRITERIA / UBAH DATA</h4> </ol>
          </div>

          <div class="panel panel-container">
              <div class="bootstrap-table">
                <?php 
                $con=mysqli_connect("localhost","root","","metode_knn");
                $data=mysqli_query($con,"SELECT * FROM tbl_subkriteria WHERE kode_subkriteria='$-GET[kode_subkriteria]'");
                while ($a=mysqli_fetch_array($data)) {
                    ?>

                <form action="subkriteriaproses.php?proses=prosesubah" method="post" enctype="                          
                multipart/form-data">

               <input type="hidden" name="kode_subkriteria" class="form-control" value="<?php   //klo sudah muncul text diganti hiden                             
                   echo $a['kode_subkriteria'] ?>">
                   
                <input type="hidden" name="kode_kriteria" class="form-control" value="<?php   //klo sudah muncul text diganti hiden                             
                   echo $a['kode_kriteria'] ?>"> 

            <div class="form-group">
                <label>Nama Subkriteria</label>
                <input type="text" name="nama_subkriteria" class="form-control" placeholder="nama subkriteria" 
                value="<?php echo $a['nama_subkriteria'] ?>">
   
            </div>

            <div class="form-group">
                <label>Nilai</label>
                <input type="text" name="nilai_subkriteria" class="form-control"
                value="<?php echo $a['nilai_subkriteria'] ?>">
   
            </div>

            <div class="modal-footer">
            <a href="subkriteria.php?kode_kriteria=<?php echo $_GET['kode_kriteria'] ?>" class="btn btn-primary">Kembali</a>
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