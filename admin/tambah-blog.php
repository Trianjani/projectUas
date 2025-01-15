<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
?>

<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Tulis Blog Baru</h2>
            <form action="proses-tambah-blog.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Blog</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="konten">Konten Blog</label>
                    <textarea name="konten" id="konten" class="form-control" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Blog</button>
            </form>
        </div>
    </div>
</div>
<script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>

<script>
    CKEDITOR.replace('konten');
</script>

<?php include "footer.php"; ?>