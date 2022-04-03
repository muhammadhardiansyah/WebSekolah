<?php 
$sidebar = 'Visi Misi';
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
                    <h1 class="m-0">Edit Data Visi Misi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard">Admin</a></li>
                        <li class="breadcrumb-item active">Edit Data Visi Misi</li>
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
    $id_visi_misi = $_POST['id_visi_misi'];
    $visi = $_POST["visi"];
    $misi = $_POST["misi"];
    $result = update_visi_misi($visi, $misi, $id_visi_misi);
?>
    <br>
    <div class='alert alert-success alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Visi dan Misi Berhasil di Update.
    </div>
<?php } ?>

<?php
//fetch user data
$query = get_visi_misi();

while ($item = mysqli_fetch_array($query)){
    $id_visi_misi = $item['id_visi_misi'];
    $visi = $item["visi"];
    $misi = $item["misi"];
}
?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Visi Misi</h5>
                        </div>

                        <div class="card-body">
                            <form action="edit.php" method="POST">
                                    <div class="form-row">

                                        <div class="form-group col-md-12">
                                            <label for="summernote">Visi</label>
											<textarea required class="summernote" name="visi">
                                                <?= $visi ?>
                                            </textarea>         
										</div>
                                        
                                        <input type="hidden" id="id_visi_misi" name="id_visi_misi" value="<?= $id_visi_misi ?>">
                                        
                                        <div class="form-group col-md-12">
                                            <label for="summernote">Misi</label>
											<textarea required class="summernote" name="misi">
                                                <?= $misi ?>
                                            </textarea>         
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