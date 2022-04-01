<?php
include("../../core/init.php");

if (isset($_GET['id_tenaga_kerja'])){
    $id_tenaga_kerja = $_GET['id_tenaga_kerja'];
    // echo $_GET['id_guru'];
    $delete = del_tenaga_kerja($id_tenaga_kerja);
    
    header("Location: index.php?success=Berita berhasil di Hapus");
}
else {
    header("Location: index.php");
}

?>