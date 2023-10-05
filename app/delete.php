<?php
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
	header("Location: index.php");
	exit;
}

// mengambil id dari URL
$id = $_GET['id'];

if (delete($id) > 0) {
	//sukses dan gagal
	echo "<script>
			alert('Data berhasil dihapus');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "Data gagal ditambahkan!";
}
?>