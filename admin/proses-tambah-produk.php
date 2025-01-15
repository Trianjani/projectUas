<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $harga = $koneksi->real_escape_string($_POST['harga']);
    $gambar = $_FILES['gambar']['name'];
    $target = "../image/" . basename($gambar);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $query = "INSERT INTO produk (nama, harga, gambar) VALUES ('$nama', '$harga', '$gambar')";
        if ($koneksi->query($query) === TRUE) {
            header("location:tampil-produk.php?pesan=inputBerhasil");
        } else {
            echo "Error: " . $query . "<br>" . $koneksi->error;
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>