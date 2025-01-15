<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $koneksi->real_escape_string($_POST['judul']);
    $konten = $koneksi->real_escape_string($_POST['konten']);
    $gambar = $_FILES['gambar']['name'];
    $target = "../image/" . basename($gambar);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $query = "INSERT INTO blog (judul, konten, gambar) VALUES ('$judul', '$konten', '$gambar')";
        if ($koneksi->query($query) === TRUE) {
            header("location:tampil-blog.php?pesan=inputBerhasil");
        } else {
            echo "Error: " . $query . "<br>" . $koneksi->error;
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>