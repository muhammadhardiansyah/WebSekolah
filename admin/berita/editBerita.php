<?php
include("../../functions/db.php");
include("../../functions/berita.php");
if (isset($_POST['update'])){
    $id_berita = $_POST['id_berita'];
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $gambar = $_POST["gambar"];
    $kategori = $_POST["kategori"];
    $penulis = $_POST['penulis']; 
    
    // echo "$id_berita,$judul,$deskripsi,$kategori,$penulis";
    //update data
    $result = mysqli_query($koneksi, "UPDATE berita SET judul='$judul', deskripsi = '$deskripsi', gambar = '$gambar', kategori = '$kategori', penulis = '$penulis' WHERE id_berita = $id_berita");
    
    header("Location: berita.php");
}
else {
    header("Location: berita.php");
}

?>