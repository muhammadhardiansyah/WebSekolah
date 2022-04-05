<?php 
$sidebar = 'Buat Tenaga Kerja';
include('../../core/init.php');
include_once('../template/header.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Tenaga Kerja</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/">Admin</a></li>
                        <li class="breadcrumb-item active">Tambah Data Tenaga Kerja</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
<?php
if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $id_tenaga = $_POST ['id_tenaga'];
    $gambar = gambar();
    $add = add_tenaga_kerja($nama,$id_tenaga,$gambar);
    echo "
    <br>
    <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Data tenaga kerja berhasil ditambahkan. <a href='index.php'>Lihat Daftar Tenaga Kerja</a> 
    </div> ";
   
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Tenaga Kerja</h5>
                        </div>

                        <div class="card-body">
                            <form action="add.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" required>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="jabatan">Tenaga Kerja</label>
                                            <select name="id_tenaga" class="custom-select" id="inputGroupSelect02" required>
                                                <option value="" selected>Choose..</option>
                                            <?php 
                                                $dbTenaga = mysqli_query($link, "SELECT * FROM jabatan_tenaga ORDER BY id_tenaga asc");  
                                                while ($item = mysqli_fetch_array($dbTenaga)){
                                                ?>
                                                <option value="<?= $item['id_tenaga']; ?>"><?= $item['tenaga_kerja']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

										<div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
											<input type="file" name="gambar" id="gambar">
										</div>

                                        <div class="form-group col-md-12">
                                            <button type="submit" name="tambah" class="btn btn-primary form-control"><i class="fa fa-save mr-1"></i> Tambah Data</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php
include_once('../template/footer.php');
?>