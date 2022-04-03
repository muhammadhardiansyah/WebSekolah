<?php 
$sidebar = 'BUat Guru';
include ('../../core/init.php');
include_once('../template/header.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Guru</h1>
                    <a href="index.php" class="btn btn-light btn-sm"><i class="fa fa-chevron-left mr-1"></i> Kembali</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Guru</li>
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
    $id_guru = $_POST['id_guru'];
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $gambar = $_POST["gambar"];
    // echo "$id_berita,$judul,$deskripsi,$kategori,$penulis";
    //update data
    $result = update_guru($nama,$jabatan,$gambar,$id_guru);
    
    echo "
    <script type='text/javascript'>location.href = 'index.php?success=Data Guru Berhasil di Update';</script>
    ";
//     // echo "$judul,$deskripsi,$gambar,$kategori,$penulis,$id_berita";
    
}
?>

<?php
//check apakah ada method GET
if(isset($_GET['id_guru'])){
    //Mengambil ID dan menampilkan data berdasarkan ID
    $id_guru = $_GET['id_guru'];
}
else{
    //redirect kembali ke halaman utama
    echo "
    <script type='text/javascript'>location.href = 'index.php?';</script>
    ";
}

//fetch user data
$query = show_guru($id_guru);

while ($item = mysqli_fetch_array($query)){
    $nama = $item["nama"];
    $jabatan = $item['jabatan'];
    $id_jabatan = $item["id_jabatan"];
    $gambar = $item["gambar"]; 
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Berita</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_guru" value="<?= $id_guru ?>">
                                    <div class="form-row">
                                        <input type="hidden" id="id_berita" name="id_berita" value="<?= $id_berita ?>">
                                        <div class="form-group col-md-12">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" required>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="jabatan">Jabatan</label>
                                            <select name="jabatan" class="custom-select" id="inputGroupSelect02" required>
                                                <option value="<?= $id_jabatan ?>" selected><?= $jabatan; ?></option>
                                                <?php 
                                                $dbJabatan = mysqli_query($link, "SELECT * FROM jabatan ORDER BY id_jabatan asc");  
                                                while ($jabatan = mysqli_fetch_array($dbJabatan)){
                                                    if ($id_jabatan != $jabatan['id_jabatan']){
                                                ?>
                                                <option value="<?= $jabatan['id_jabatan']; ?>"><?= $jabatan['jabatan']; ?></option>
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