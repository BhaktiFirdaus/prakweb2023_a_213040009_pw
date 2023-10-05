<?php
// Memulai atau mengaktifkan sesi
session_start();

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb2023_a_213040009_pw');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    // Jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi tambah data
function add($data)
{
    $conn = koneksi();

    $Judul_Buku = htmlspecialchars($data['Judul_Buku']);
    $Penulis = htmlspecialchars($data['Penulis']);
    $Penerbit = htmlspecialchars($data['Penerbit']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO
	            buku
	            VALUES
	          (null, '$Judul_Buku', '$Penulis', '$Penerbit', '$Gambar');
	          ";
    mysqli_query($conn, $query) or die(mysqli_query($conn));
    return mysqli_affected_rows($conn);
}

//fungsi hapus data
function delete($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_query($conn));
    return mysqli_affected_rows($conn);
}

//fungsi ubah data
function edit($data)
{
    $conn = koneksi();

    $id = ($data['id']);
    $Judul_Buku = htmlspecialchars($data['Judul_Buku']);
    $Penulis = htmlspecialchars($data['Penulis']);
    $Penerbit = htmlspecialchars($data['Penerbit']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "UPDATE buku SET
				Judul_Buku = '$Judul_Buku',
				Penulis = '$Penulis',
				Penerbit = '$Penerbit',
			    Gambar = '$Gambar'
				WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>