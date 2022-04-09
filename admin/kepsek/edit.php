<?php 
$sidebar = 'kepsek';
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
                    <h1 class="m-0">Edit Data Kepsek</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Kepsek</li>
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
    $id_kepsek = $_POST['id_kepsek'];
    $nama = $_POST['nama'];
    $gambar = escape($_POST['gambar_old']);
    if(!empty($_FILES['gambar']['tmp_name'])){
        $gambar = gambar();
    }
    $result = update_kepsek($nama ,$gambar, $id_kepsek);
    echo "
    <script type='text/javascript'>location.href = 'index.php?success=Kepsek berhasil di Update';</script>
    ";
}
?>

<?php
//check apakah ada method GET
if(isset($_GET['id_kepsek'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_kepsek = $_GET['id_kepsek'];
}
else{
    //redirect kembali ke halaman utama
    echo "
    <script type='text/javascript'>location.href = 'index.php';</script>
    ";
}

//fetch user data
$query = show_kepsek($id_kepsek);


while ($item = mysqli_fetch_array($query)){
    $id_kepsek = $item['id_kepsek'];
    $nama = $item['nama'];
    $gambar = $item['gambar'];
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Kepsek</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="judul">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>">
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
                                            <input type="hidden" name="gambar_old" value="<?= $gambar; ?>">
											<input type="file" name="gambar" id="gambar">
										</div>

                                        <input type="hidden" id="id_kepsek" name="id_kepsek" value="<?= $id_kepsek ?>">

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