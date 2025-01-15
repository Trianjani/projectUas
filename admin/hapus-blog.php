<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

include "../koneksi.php";

// Dapatkan ID blog dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Hapus blog berdasarkan ID
$query = "DELETE FROM blog WHERE id = $id";
if ($koneksi->query($query) === TRUE) {
    header("location:tampil-blog.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}
?>