<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
include "../koneksi.php";
?>

<div class="container" style="margin-top: 100px;">
    <h2>Daftar Blog</h2>
    <table id="blogTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>
                    <a href="tambah-blog.php" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $koneksi->query("SELECT * FROM blog ORDER BY tanggal DESC");
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['judul']); ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><img src="../image/<?php echo $row['gambar']; ?>" width="100"></td>
                    <td>
                        <a href="edit-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="hapus-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?');"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#blogTable').DataTable();
    });
</script>

<?php include "footer.php"; ?>