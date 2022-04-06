<?php 
$sidebar = 'Buat Berita';
include '../../core/init.php';
include_once('../template/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Berita</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Tambah Data Berita</li>
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
    $date = new DateTime('now',new DateTimeZone('Asia/Jakarta'));
    $now = $date ->format('Y-m-d');
    $judul = $_POST['judul'];
    $deskripsi = $_POST ['deskripsi'];
    $gambar = gambar();
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $created_at = $now;
    $add = add_berita($judul, $deskripsi, $gambar, $kategori,$penulis,$created_at);
    echo "
    <br>
    <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Berita berhasil ditambahkan. <a href='index.php'>Lihat Daftar Berita</a> 
    </div> ";
   
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Berita</h5>
                        </div>

                        <div class="card-body">
                            <form action="add.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="judul">judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul">       
                                        </div>

                                        <div class="form-group col-md-12">
											<label for="summernote">Deskripsi</label>
											<textarea required class="summernote" name="deskripsi">
											</textarea>
											
										</div>

										<div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
											<input type="file" name="gambar" id="gambar">
										</div>

                                        <div class="form-group col-md-12">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori">
                                        </div>


                                        <div class="form-group col-md-12 mb-4">
                                            <label for="penulis">Penulis</label>
                                            <input type="text" class="form-control" id="penulis" name="penulis">
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