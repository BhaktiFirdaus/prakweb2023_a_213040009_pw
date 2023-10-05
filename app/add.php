<?php
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['add'])) {
    if (add($_POST) > 0) {
        // Pesan sukses dan gagal
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
    } else {
        echo "Data gagal ditambahkan!";
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
    <title>Add Data</title>
</head>

<body>
    <div class="container mt-5 shadow p-5 mb-5 bg-body-tertiary rounded">
        <h3 class="text-center">Tambah Data</h3>
        <br></br>

        <!-- form add -->
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="Judul_Buku" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" class="form-control" name="Penulis" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="Penerbit" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="text" class="form-control" name="Gambar" required>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>