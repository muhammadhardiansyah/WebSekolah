<?php
include("../../functions/db.php");
include("../../functions/guru.php");

if (isset($_GET['id_guru'])){
    $id_guru = $_GET['id_guru'];
    // echo $_GET['id_guru'];
    $delete = mysqli_query($koneksi, del_guru($id_guru));
    
    header("Location: guru.php");
}
else {
    header("Location: guru.php");
}

?>