<?php 
$sidebar = 'Semua Berita';
require_once('../../core/init.php');
include_once('../template/header.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Guru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola Guru</li>
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
                            <h5 class="mb-0">Data Guru</h5>
                            <a class="btn btn-sm btn-primary mr-0 ml-auto" href="tambahGuru.php"><i
                                class="fa fa-plus"></i> Tambah Data Guru</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </th>
                                <tbody class="text-center">
                                <?php    
                                    $i = 1;
                                    $query = get_guru();
                                    while ($item = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $i ?></td>
                                        <td><?= $item['nama']; ?></td>
                                        <td><?= $item['jabatan'];?></td>
                                        <td><?= $item['gambar'];?></td>
                                        <td>
                                            <a href='editGuru.php?id_guru=<?= $item['id_guru']; ?>'><button type='button' class='btn btn-sm btn-info my-1'><i class='fa fa-pen'></i></button></a>
                                            <a href='delGuru.php?id_guru=<?= $item['id_guru']; ?>'><button type='button' class='btn btn-sm btn-danger my-1' onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')"><i class='fa fa-trash'></i></button></a>
                                        </td>
                                    </tr>
                                    <?php 
                                        $i += 1;
                                    } ?>
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