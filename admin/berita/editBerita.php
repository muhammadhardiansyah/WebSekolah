<?php 
$sidebar = 'Buat Berita';
include_once('../template/header.php');
include("../../functions/db.php");
include("../../functions/berita.php");

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Berita</h1>
                    <a href="berita.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Admin</a></li>
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
    $gambar = $_POST["gambar"];
    $kategori = $_POST["kategori"];
    $penulis = $_POST['penulis']; 
    
    // echo "$id_berita,$judul,$deskripsi,$kategori,$penulis";
    //update data
    $result = mysqli_query($koneksi, "UPDATE berita SET judul='$judul', deskripsi = '$deskripsi', gambar = '$gambar', kategori = '$kategori', penulis = '$penulis' WHERE id_berita = $id_berita");
    
    echo "
    <script type='text/javascript'>location.href = 'berita.php';</script>
    ";
//     // echo "$judul,$deskripsi,$gambar,$kategori,$penulis,$id_berita";
    
}
?>

<?php
//check apakah ada method GET
if(isset($_GET['id_berita'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_berita = $_GET['id_berita'];
}
else{
    //redirect kembali ke halaman utama
    echo "
    <script type='text/javascript'>location.href = 'berita.php';</script>
    ";
}

//fetch user data
$query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = $id_berita");

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
                            <form action="editBerita.php" method="POST">
                                    <div class="form-row">
                                        <input type="hidden" id="id_berita" name="id_berita" value="<?= $id_berita ?>">
                                        <div class="form-group col-md-12">
                                            <label for="judul">judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $judul; ?>">
                                            <!-- @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div> -->
                                            
                                        </div>


                                        <div class="form-group col-md-12">
											<label for="summernote">Deskripsi</label>
											<textarea required id="summernote" name="deskripsi">
                                            <?= $deskripsi; ?>
											</textarea>
											<!-- @error('deskripsi')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
											@enderror -->
										</div>

										<div class="form-group col-md-12 mb-4">
											<label for="kategori">Gambar</label><br>
											<input type="file" name="gambar" id="gambar" value="<?= $gambar; ?>">
										</div>

                                        <div class="form-group col-md-12">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $kategori; ?>">
                                            <!-- @error('kategori')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror -->
                                        </div>


                                        <div class="form-group col-md-12 mb-4">
                                            <label for="penulis">Penulis</label>
                                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $penulis; ?>">
                                            <!-- @error('penulis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror -->
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