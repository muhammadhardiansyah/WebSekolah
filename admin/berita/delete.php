<?php
include '../../core/init.php';

if (isset($_GET['id_berita'])){
    $id_berita = $_GET['id_berita'];
    echo $_GET['id_berita'];
    $delete = del_berita($id_berita);
    
    header("Location: index.php?success=Berita berhasil di Hapus");
}
else {
    header("Location: index.php");
}

?>