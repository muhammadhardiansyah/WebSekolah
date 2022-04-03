<?php 
$sidebar = 'Edit Contact';
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
                    <h1 class="m-0">Edit Data Contact</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Contact</li>
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
    $id_contact = $_POST['id_contact'];
    $deskripsi = $_POST["deskripsi"];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $gmaps = $_POST["gmaps"]; 
    
    $result = update_contact($deskripsi, $nomor, $email,$gmaps,$id_contact);
?>
    <br>
    <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Contact Berhasil di Update.
    </div>
<?php } ?>

<?php
$query = get_contact();

while ($item = mysqli_fetch_array($query)){
    $id_contact = $item['id_contact'];
    $deskripsi = $item["deskripsi"];
    $nomor = $item['nomor'];
    $email = $item['email'];
    $gmaps = $item["gmaps"]; 
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Contact</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="summernote">Deskripsi</label>
											<textarea required class="summernote" name="deskripsi">
                                                <?= $deskripsi ?>
                                            </textarea>         
										</div>

                                        <input type="hidden" id="id_berita" name="id_contact" value="<?= $id_contact ?>">

                                        <div class="form-group col-md-12">
                                            <label for="judul">Nomor</label>
                                            <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $nomor; ?>">
                                        </div>

										<div class="form-group col-md-12">
											<label for="kategori">Email</label><br>
											<input type="email" class="form-control" name="email" id="email" value="<?= $email; ?>">
										</div>

                                        <div class="form-group col-md-12">
                                            <label for="kategori">Gmaps</label>
                                            <input type="text" class="form-control" name="gmaps" id="gmaps" value="<?= $gmaps; ?>">
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