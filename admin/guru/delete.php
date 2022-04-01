<?php
include("../../core/init.php");

if (isset($_GET['id_guru'])){
    $id_guru = $_GET['id_guru'];
    // echo $_GET['id_guru'];
    del_guru($id_guru);
    header("Location: index.php?success=Berita berhasil di Hapus");
}
else {
    header("Location: index.php");
}

?>