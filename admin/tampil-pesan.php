<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
include "../koneksi.php";
?>

<div class="container" style="margin-top: 100px;">
    <h2>Daftar Pesan</h2>
    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'deleteBerhasil') {
        echo "<div class='alert alert-success'>Pesan berhasil dihapus.</div>";
    }
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'success') {
        echo "<div class='alert alert-success'>Pesan berhasil dikirim.</div>";
    }
    ?>
    <table id="messageTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $koneksi->query("SELECT * FROM pesan ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <a href="hapus-pesan.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
        $('#messageTable').DataTable();
    });
</script>

<?php include "footer.php"; ?>