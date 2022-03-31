<?php
include("../../functions/db.php");
include("../../functions/berita.php");

if (isset($_GET['id_berita'])){
    $id_berita = $_GET['id_berita'];
    echo $_GET['id_berita'];
    $delete = mysqli_query($koneksi, del_berita($id_berita));
    
    header("Location: berita.php");
}
else {
    header("Location: berita.php");
}

?>