<?php 
$sidebar = 'gallery';
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
                    <h1 class="m-0">Kelola Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola Gallery</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-row">
                            <h5 class="mb-0">Data Gallery</h5>
                            <a class="btn btn-sm btn-primary mr-0 ml-auto" href="add.php"><i
                                class="fa fa-plus"></i> Tambah Gallery Baru</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light text-center">
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </th>
                                <?php 
                                if(isset($_GET['success'])){ ?>
                                    <br>
                                    <div class='alert alert-success alert-dismissible'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <?= $_GET['success'] ?>
                                    </div>
                                   
                                <?php } ?>
                                <tbody class="text-center">
                                <?php    
                                    $query = get_gallery();
                                    $i = 1;
                                    while ($item = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $i ?></td>
                                        <td><img height="200px" src="../../view/upload/<?= $item['gambar'];?>" alt=""></td>
                                        <td><?= $item['kategori']; ?></td>
                                        <td>
                                            <a href='edit.php?id_gallery=<?= $item['id_gallery']; ?>'><button type='button' class='btn btn-sm btn-info my-1'><i class='fa fa-pen'></i></button></a>
                                            <a href='delete.php?id_gallery=<?= $item['id_gallery']; ?>'><button type='button' class='btn btn-sm btn-danger my-1' onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')"><i class='fa fa-trash'></i></button></a>
                                        </td>
                                    </tr>
                                    <?php $i+=1; } ?>
                                </tbody>
                            </table>
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