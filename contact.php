<?php include 'navbar.php'; ?>



<!-- Contact Section Start -->
<div class="container contact-section">
    <div class="row">
        <div class="col-md-6">
            <img src="image/woman (2).jpg" alt="Contact Image" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami. Kami siap
                membantu Anda.</p>
                <?php
                if (isset($_GET['pesan']) && $_GET['pesan'] == 'success') {
                    echo "<div class='alert alert-success'>Pesan Anda berhasil dikirim!</div>";
                }
                ?>
            <!-- Formulir Kontak -->
            <form method="POST" action="proses-contact.php">
                <div class="form-group">
                    <input type="text" name="full_name" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" rows="5" placeholder="Pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Kirim</button>
            </form>
        </div>
    </div>
    <div class="row contact-info">
        <div class="col-md-4 text-center">
            <i class="fas fa-phone"></i>
            <p>+62 812 3456 7890</p>
            <p>+62 812 3456 7891</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-envelope"></i>
            <p>info@beautybliss.com</p>
            <p>support@beautybliss.com</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-map-marker-alt"></i>
            <p>Jl. Medan B Aceh, Stabat, Indonesia</p>
        </div>
    </div>
    <div class="row map-container">
        <div class="col-md-12">
            <iframe
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=stabat+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- Contact Section End -->
<?php include 'footer.php'; ?>