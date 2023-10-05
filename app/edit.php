<?php
require 'functions.php';

// jika tidak ada URL
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query data buku berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
        //pesan sukses dan gagal
        echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
    } else {
        echo "Data gagal diubah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Data</title>
</head>

<body>
    <div class="container mt-5 shadow p-5 mb-5 bg-body-tertiary rounded">
        <h3 class="text-center">Edit Data</h3>
        <br></br>
        <!-- form edit -->
        <form action="" method="POST">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $bk['id']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="Judul_Buku" required value="<?= $bk['Judul_Buku']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="Penulis" required value="<?= $bk['Penulis']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="Penerbit" required value="<?= $bk['Penerbit']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="text" class="form-control" name="Gambar" required value="<?= $bk['Gambar']; ?>">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
        </form>
    </div>
</body>

</html>