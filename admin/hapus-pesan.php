<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}

if (isset($_GET['id'])) {
    include "../koneksi.php";

    $id = $koneksi->real_escape_string($_GET['id']);

    $query = "DELETE FROM pesan WHERE id='$id'";

    if ($koneksi->query($query) === TRUE) {
        header("location:tampil-pesan.php?pesan=deleteBerhasil");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
} else {
    header("location:tampil-pesan.php");
}
?>