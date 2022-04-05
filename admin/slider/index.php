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
                    <h1 class="m-0">Kelola Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola Slider</li>
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
                            <h5 class="mb-0">Data Slider</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light text-center">
                                    <th>Urutan</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
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
                                    $query = get_slider();
                                    while ($item = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $item['urutan'] ?></td>
                                        <td><?= $item['judul']; ?></td>
                                        <td><?= $item['deskripsi'];?></td>
                                        <td><img height="200px" src="../../view/upload/<?= $item['gambar'];?>" alt=""></td>
                                        <?php echo "
                                        <td>
                                            <a href='edit.php?id_slider=$item[id_slider]'><button type='button' class='btn btn-sm btn-info my-1'><i class='fa fa-pen'></i></button></a>
                                        </td>"; ?>
                                    </tr>
                                    <?php  } ?>
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