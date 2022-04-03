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
                    <h1 class="m-0">Edit Data Tenaga Kerja</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Tenaga Kerja</li>
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
    $id_tenaga_kerja = $_POST['id_tenaga_kerja'];
    $nama = $_POST["nama"];
    $id_tenaga = $_POST["id_tenaga"];

	$gambar = '/view/default.png';
	if (isset($_FILES['gambar'])){
		$gambar = uploadImage();
	}
    // $gambar = $_POST["gambar"];
    // echo "$id_berita,$judul,$deskripsi,$kategori,$penulis";
    //update data
    $result = update_tenaga_kerja($nama,$id_tenaga,$gambar,$id_tenaga_kerja);
    
    echo "
    <script type='text/javascript'>location.href = 'index.php';</script>
    ";
//     // echo "$judul,$deskripsi,$gambar,$kategori,$penulis,$id_berita";
    
}
?>

<?php
//check apakah ada method GET
if(isset($_GET['id_tenaga_kerja'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_tenaga_kerja = $_GET['id_tenaga_kerja'];
}
else{
    //redirect kembali ke halaman utama
    echo "
    <script type='text/javascript'>location.href = 'index.php';</script>
    ";
}

//fetch user data
$query = show_tenaga_kerja($id_tenaga_kerja);

while ($item = mysqli_fetch_array($query)){
    $nama = $item["nama"];
    $tenaga_kerja = $item['tenaga_kerja'];
    $id_tenaga = $item["id_tenaga"];
    $gambar = $item["gambar"]; 
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Tenaga Kerja</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_tenaga_kerja" value="<?= $id_guru ?>">
                                    <div class="form-row">
                                        <input type="hidden" id="id_berita" name="id_tenaga_kerja" value="<?= $id_tenaga_kerja ?>">
                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" required>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="tenaga kerja">Tenaga Kerja</label>
                                            <select name="id_tenaga" class="custom-select" id="inputGroupSelect02" required>
                                                <option value="<?= $id_tenaga ?>" selected><?= $tenaga_kerja; ?></option>
                                                <?php 
                                                $dbTenaga = mysqli_query($link, "SELECT * FROM jabatan_tenaga ORDER BY id_tenaga asc");  
                                                while ($item = mysqli_fetch_array($dbTenaga)){
                                                    if ($id_tenaga != $item['id_tenaga']){
                                                ?>
                                                <option value="<?= $item['id_tenaga']; ?>"><?= $item['tenaga_kerja']; ?></option>
                                                <?php      
                                                    }
                                                } ?>
                                            </select>
                                        </div>

										<div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
											<input type="file" name="gambar" id="gambar" value="<?= $gambar; ?>">
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