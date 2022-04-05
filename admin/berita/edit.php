<?php 
$sidebar = 'Buat Berita';
include("../../core/init.php");
include_once('../template/header.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Berita</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Berita</li>
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

if (isset($_POST['update'])){
    $id_berita = $_POST['id_berita'];
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $gambar = escape(data:$_POST['gambar_old']);
    if(!empty($_FILES['gambar']['tmp_name'])){
        $gambar = gambar();
    }
    // gambar();
    $kategori = $_POST["kategori"];
    $penulis = $_POST['penulis'];   
    $result = edit_Berita($judul,$deskripsi,$gambar,$kategori,$penulis,$id_berita);
    echo "<script type='text/javascript'>location.href = 'index.php?success=Berita Berhasil di Update';</script>";
    
}
//check apakah ada method GET
if(isset($_GET['id_berita'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_berita = $_GET['id_berita'];
}
else{
    //redirect kembali ke halaman utama
    echo "<script type='text/javascript'>location.href = 'index.php';</script>";
}

//fetch user data
$query = show_berita($id_berita);

while ($item = mysqli_fetch_array($query)){
    $judul = $item["judul"];
    $deskripsi = $item["deskripsi"];
    $gambar = $item["gambar"];
    $kategori = $item["kategori"];
    $penulis = $item['penulis']; 
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Berita</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <input type="hidden" id="id_berita" name="id_berita" value="<?= $id_berita ?>">
                                        <div class="form-group col-md-12">
                                            <label for="judul">judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $judul; ?>">
                                        </div>

                                        
                                        <div class="form-group col-md-12">
                                            <label for="summernote">Deskripsi</label>
											<textarea required class="summernote" name="deskripsi">
                                                <?= $deskripsi; ?>
                                            </textarea>         
										</div>

										<div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
                                            <input type="hidden" name="gambar_old" value="<?= $gambar; ?>">
											<input type="file" name="gambar">
										</div>

                                        <div class="form-group col-md-12">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori; ?>">
                                        </div>


                                        <div class="form-group col-md-12 mb-4">
                                            <label for="penulis">Penulis</label>
                                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $penulis; ?>">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" name="update" class="btn btn-primary form-control"><i class="fa fa-save mr-1"></i> Update Data</button>
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