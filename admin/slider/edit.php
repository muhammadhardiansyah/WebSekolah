<?php 
$sidebar = 'slider';
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
                    <h1 class="m-0">Edit Data Slider</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Slider</li>
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
    $id_slider = $_POST['id_slider'];
    $urutan = $_POST['urutan'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST["deskripsi"];
    $gambar = escape($_POST['gambar_old']);
    if(!empty($_FILES['gambar']['tmp_name'])){
        $gambar = gambar();
    }
    $result = update_slider($urutan ,$judul, $deskripsi, $gambar, $id_slider);
    echo "
    <script type='text/javascript'>location.href = 'index.php?success=Slider berhasil di Update';</script>
    ";
}
?>

<?php
//check apakah ada method GET
if(isset($_GET['id_slider'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_slider = $_GET['id_slider'];
}
else{
    //redirect kembali ke halaman utama
    echo "
    <script type='text/javascript'>location.href = 'index.php';</script>
    ";
}

//fetch user data
$query = show_slider($id_slider);


while ($item = mysqli_fetch_array($query)){
    $id_slider = $item['id_slider'];
    $urutan = $item['urutan'];
    $judul = $item['judul'];
    $deskripsi = $item["deskripsi"];
    $gambar = $item['gambar'];
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Slider</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
   
                                        <div class="form-group col-md-12">
                                            <label for="judul">Urutan</label>
                                            <input readonly type="text" class="form-control" id="urutan" name="urutan" value="<?= $urutan; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="judul">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $judul; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="summernote">Deskripsi</label>
											<textarea required class="summernote" name="deskripsi">
                                                <?= $deskripsi ?>
                                            </textarea>         
										</div>

                                        <div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
                                            <input type="hidden" name="gambar_old" value="<?= $gambar; ?>">
											<input type="file" name="gambar" id="gambar">
										</div>

                                        <input type="hidden" id="id_slider" name="id_slider" value="<?= $id_slider ?>">

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