<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $koneksi->real_escape_string($_POST['full_name']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $message = $koneksi->real_escape_string($_POST['message']);

    $query = "INSERT INTO pesan (full_name, email, message) VALUES ('$full_name', '$email', '$message')";
    if ($koneksi->query($query) === TRUE) {
        // Redirect ke halaman kontak dengan pesan sukses
        header("location:contact.php?pesan=success");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
} else {
    // Jika bukan metode POST, redirect ke halaman kontak
    header("location:contact.php");
}

?>