<?php
require 'functions.php';

// query isi tabel
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Daftar Buku Novel</title>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar fixed-top bg-dark border-bottom border-body p-3" data-bs-theme="dark">
		<div class="container-md justify-content-center">
			<a class="navbar-brand border-body fw-bold" href="#">DAFTAR BUKU</a>
		</div>
	</nav>
	<br></br>

	<br></br>
	<br>
	<div class="container-md">
		<button class="btn btn-success">
			<a href="add.php" style="color: white; text-decoration: none;">Tambah Data</a>
		</button>
	</div>

	<div class="container">

		<!-- Tables -->
		<table class="table">
			<thead>
				<tr class="text-center">
					<th scope="col">ID</th>
					<th scope="col">Judul Buku</th>
					<th scope="col">Penulis</th>
					<th scope="col">Penerbit</th>
					<th scope="col">Gambar</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>

			<?php $i = 1;
			foreach ($buku as $bk): ?>
				<tbody>
					<tr class="text-center">
						<td>
							<?= $i++; ?>
						</td>
						<td>
							<?= $bk['Judul_Buku']; ?>
						</td>
						<td>
							<?= $bk['Penulis']; ?>
						</td>
						<td>
							<?= $bk['Penerbit']; ?>
						</td>
						<td><img src="assets/<?= $bk['Gambar']; ?>" width="150"></td>
						<td>
							<button class="btn btn-primary">
								<a href="edit.php?id=<?= $bk['id']; ?>"
									style="color: white; text-decoration: none;">Edit</a>
							</button>
							<button class="btn btn-danger">
								<a href="delete.php?id=<?= $bk['id']; ?>" onclick="return confirm('Apakah anda yakin?');"
									style="color: white; text-decoration: none;">Delete</a></li>
							</button>
						</td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>
	</div>


</body>

</html>