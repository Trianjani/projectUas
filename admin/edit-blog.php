<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
include "../koneksi.php";

// Dapatkan ID blog dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ambil data blog berdasarkan ID
$result = $koneksi->query("SELECT * FROM blog WHERE id = $id");
$blog = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $koneksi->real_escape_string($_POST['judul']);
    $konten = $koneksi->real_escape_string($_POST['konten']);
    $gambar = $koneksi->real_escape_string($_POST['gambar']);

    $query = "UPDATE blog SET judul = '$judul', konten = '$konten', gambar = '$gambar' WHERE id = $id";
    if ($koneksi->query($query) === TRUE) {
        header("location:tampil-blog.php?pesan=editBerhasil");
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}
?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Edit Blog</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="judul">Judul Blog</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo htmlspecialchars($blog['judul']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="konten">Konten Blog</label>
                    <textarea name="konten" id="konten" class="form-control" rows="10" required><?php echo htmlspecialchars($blog['konten']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar Blog</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
<script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('konten');
</script>

<?php include "footer.php"; ?>