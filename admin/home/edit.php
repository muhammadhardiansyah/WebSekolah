<?php 
$sidebar = 'Home';
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
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Home</li>
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
    $id_home = $_POST['id_home'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST["deskripsi"];
    $result = update_home($judul, $deskripsi, $id_home);
?>
    <br>
    <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Home Berhasil di Update.
    </div>
<?php } ?>

<?php
//check apakah ada method GET
// if(isset($_GET['id_berita'])){
//     //Mengambil ID dan menampilkan data berdasarkan ID
//     $id_berita = $_GET['id_berita'];
// }

//fetch user data
$query = get_home();

while ($item = mysqli_fetch_array($query)){
    $id_home = $item['id_home'];
    $judul = $item['judul'];
    $deskripsi = $item["deskripsi"];
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Home</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST">
                                    <div class="form-row">
   
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

                                        <input type="hidden" id="id_home" name="id_home" value="<?= $id_home ?>">

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