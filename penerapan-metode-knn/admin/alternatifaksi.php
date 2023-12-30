<?php
include 'header.php';
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == 'tambah') { ?>

        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>ALTERNATIF / TAMBAH DATA</h4>
                </ol>
            </div>
            <?php
            $con = mysqli_connect("localhost", "root", "", "metode_knn");
            $carikode = mysqli_query($con, "SELECT max(kode_alternatif) FROM tbl_alternatif");
            $datakode = mysqli_fetch_array($carikode);
            if ($datakode) {
                $nilaikode = substr($datakode[0], 1);
                $kode = (int) $nilaikode;
                $kode = $kode + 1;
                $kode_otomatis = "A" . str_pad($kode, 2, "0", STR_PAD_LEFT);
            } else {
                $kode_otomatis = "A01";
            }
            ?>

            <div class="panel panel-container">
                <div class="bootstrap-table">

                    <form action="alternatifproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Alternatif</label>
                            <input type="hidden" name="kode_alternatif" class="form-control" value="<?php //kalo sudah muncul datanya text diganti hiden
                                                                                                    echo $kode_otomatis ?>">

                        </div>
                        <div class="form-group">
                            <label>Nama Alternatif</label>
                            <input type="text" name="nama_alternatif" class="form-control" placeholder="Nama alternatif">
                        </div>

                        <div class="modal-footer">
                            <a href="alternatif.php" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php } elseif ($_GET['aksi'] == 'ubah') { ?>

        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <h4>ALTERNATIF / UBAH DATA</h4>
                </ol>
            </div>

            <div class="panel panel-container">
                <div class="bootstrap-table">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "metode_knn");
                    $data = mysqli_query($con, "SELECT * FROM tbl_alternatif WHERE kode_alternatif='$-GET[kode_alternatif]'");
                    while ($a = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                    ?>
                        <form action="alternatifproses.php?proses=prosesubah" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="kode_alternatif" class="form-control" placeholder="kode alternatif" value="echo $a['kode_alternatif'] ?>">
                            <div class="form-group">
                                <label>Nama Alternatif</label>
                                <input type="text" name="nama_alternatif" class="form-control" placeholder="nama alternatif" value="echo $a['nama_alternatif'] ?>">
                            </div>
                            <div class="modal-footer">
                                <a href="alternatif.php" class="btn btn-primary">Kembali</a>
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