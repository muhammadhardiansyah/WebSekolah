<?php
include("../../functions/db.php");
include("../../functions/tenaga_kerja.php");

if (isset($_GET['id_tenaga_kerja'])){
    $id_tenaga_kerja = $_GET['id_tenaga_kerja'];
    // echo $_GET['id_guru'];
    $delete = mysqli_query($koneksi, del_tenaga_kerja($id_tenaga_kerja));
    
    header("Location: tenagaKerja.php");
}
else {
    header("Location: tenagaKerja.php");
}

?>