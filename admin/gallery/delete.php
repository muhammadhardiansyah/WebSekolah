<?php
include("../../core/init.php");

if (isset($_GET['id_gallery'])){
    $id_gallery = $_GET['id_gallery'];
    // echo $_GET['id_guru'];
    del_gallery($id_gallery);
    header("Location: index.php?success=Berita berhasil di Hapus");
}
else {
    header("Location: index.php");
}

?>