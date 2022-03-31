<?php 
$sidebar = 'Tenaga Kerja';
include_once('../template/header.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Tenaga Kerja</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Admin</a></li>
                        <li class="breadcrumb-item active">Kelola Tenaga Kerja</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- @if(Session::has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif -->
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
                            <h5 class="mb-0">Tenaga Kerja</h5>
                            <a class="btn btn-sm btn-primary mr-0 ml-auto" href="tambahTenagaKerja.php"><i
                                class="fa fa-plus"></i> Tambah Tenaga Kerja</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tenaga Kerja</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </th>
                                <?php 
                                include "../../functions/db.php";
                                include "../../functions/tenaga_kerja.php";

                                // if(isset($_POST['hapus'])){
                                //     $id_guru = $_GET['id_guru'];
                                //     $delete = mysqli_query($koneksi, del_berita($id_guru));
                                //     echo "
                                //     <br>
                                //     <div class='alert alert-success alert-dismissible'>
                                //     <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                //     Data guru berhasil dihapus.
                                //     </div> ";
                                   
                                // }
                                ?>
                                <tbody class="text-center">
                                <?php    
                                    $query = mysqli_query($koneksi,get_tenaga_kerja());
                                    $i = 1;
                                    while ($item = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <td class="font-weight-bold"><?= $i ?></td>
                                        <td><?= $item['nama']; ?></td>
                                        <td><?= $item['tenaga_kerja'];?></td>
                                        <td><?= $item['gambar'];?></td>
                                        <?php echo "
                                        <td>
                                            <a href='editTenagaKerja.php?id_tenaga_kerja=$item[id_tenaga_kerja]'><button type='button' class='btn btn-sm btn-info my-1'><i class='fa fa-pen'></i></button></a>
                                            <a href='delTenagaKerja.php?id_tenaga_kerja=$item[id_tenaga_kerja]'><button type='button' class='btn btn-sm btn-danger my-1' onclick="."return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')"."><i class='fa fa-trash'></i></button></a>
                                        </td>"; ?>



                                        <!-- <td>
                                            <a href='edit.php?id_berita=$item[id_berita]'><button type='button' class='btn btn-sm btn-info my-1'><i class="fa fa-pen"></i></button></a>
                                            <a href='berita.php?id_berita=$item[id_berita]'><button type='button' name="hapus" class='btn btn-sm btn-danger my-1' onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')"><i class="fa fa-trash"></i></button></a>
                                        </td> -->



                                        <!-- <td>
                                            
                                            <a href="{{ route('admin.pegawai.edit', $item->id) }}" class="btn btn-sm btn-info my-1" title="Edit Data">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <form action="{{ route('admin.pegawai.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                                <button class="btn btn-sm btn-danger my-1" title="Hapus Data" type="submit" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td> -->
                                    </tr>
                                    <?php 
                                        $i += 1;
                                    } ?>
                                    <!-- <tr>
                                        <td class="font-weight-bold">1</td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>asd</td>
                                        <td>
                                            <a href="{{ route('admin.pegawai.edit', $item->id) }}" class="btn btn-sm btn-info my-1" title="Edit Data">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <form action="{{ route('admin.pegawai.destroy', $item->id) }}" method="POST" class="d-inline-block">
                                                <button class="btn btn-sm btn-danger my-1" title="Hapus Data" type="submit" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr> -->
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