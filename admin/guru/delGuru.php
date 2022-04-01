<?php
require_once('../../core/init.php');

if (isset($_GET['id_guru'])){
    $id_guru = $_GET['id_guru'];
    del_guru($id_guru);
    echo "
		<script>
			alert('Data guru berhasil dihapus!');
			window.location.replace('guru.php');
		</script>
	";
}
else {
    header("Location: guru.php");
}

?>