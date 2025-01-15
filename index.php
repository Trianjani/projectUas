<?php include 'navbar.php'; ?>

    <!-- carousel start -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="image/carousel1.png" alt="Slide 1">
            </div>

            <div class="item">
                <img src="image/carousel2.png" alt="Slide 2">
            </div>

            <div class="item">
                <img src="image/carousel3.png" alt="Slide 3">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- carousel end -->

<!-- promo start  -->
<div class="promo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="promo-item">
                        <a href="shop.html"><img src="image/promo (1).png" alt="Product 1"></a>
                        <div class="promo-discount">
                            <span>5%</span> OFF
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-item">
                        <a href="shop.html"><img src="image/promo (2).png" alt="Product 2"></a>
                        <div class="promo-discount">
                            <span>15%</span> OFF
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo-item">
                        <a href="shop.html"><img src="image/promo (3).png" alt="Product 3"></a>
                        <div class="promo-discount">
                            <span>15%</span> OFF
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- promo end  -->

 <!-- top sell  -->
<div class="container">
    <h1 style=" text-align: center; font-weight: bolder; color: #ff6f61;">Top Sell</h1>
   <p style="text-align: center;">Penjualan terbanyak bulan ini</p>
    <div class="row">
        <!-- card 1 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">new</div>
                <img src="image/SK-II PITERA™ Youth Essentials(1.2jt).png" alt="SK-II">
                <div class="title">SK-II PITERA™ Youth Essentials</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 1.200.000 <span class="old-price">Rp 1.250.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">new</div>
                <img src="image/Scarlett Whitening Jolly Series (300).png" alt="Scarlett">
                <div class="title">Scarlett Whitening Jolly Series</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 300.000 <span class="old-price">Rp 320.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- card 3 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">new</div>
                <img src="image/Olay Regenerist Set Niacinamide Skincare Antiaging Cream, Serum, Cleanser(398).png"
                    alt="Olay">
                <div class="title">Olay Regenerist Set Niacinamide Skincare Antiaging Cream, Serum, Cleanser</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 398.000 <span class="old-price">Rp 400.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top sell end  -->

<!-- testimonials -->
<section class="testimonials">
    <div class="container">
        <h2 class="text-center">Apa Kata Pelanggan Kami</h2>
        <p class="text-center">Beberapa kata pelanggan kami</p>
        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-carousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (1).jpg" alt="Ayu Lestari" class="img-circle">
                            <h4>Ayu Lestari</h4>
                            <p class="title">Desainer Grafis</p>
                            <p>Produk ini sangat luar biasa! Kulit saya menjadi lebih cerah dan sehat setelah menggunakannya selama satu bulan.</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (3).jpg" alt="Bunga Sari" class="img-circle">
                            <h4>Bunga Sari</h4>
                            <p class="title">Manajer</p>
                            <p>Saya sangat puas dengan hasilnya. Kulit saya terasa lebih lembut dan tidak berminyak lagi.</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (4).jpg" alt="Citra Dewi" class="img-circle">
                            <h4>Citra Dewi</h4>
                            <p class="title">Ibu Rumah Tangga</p>
                            <p>Produk ini sangat membantu mengurangi kerutan di wajah saya. Saya merasa lebih percaya diri sekarang.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (5).jpg" alt="Dewi Anggraini" class="img-circle">
                            <h4>Dewi Anggraini</h4>
                            <p class="title">Insinyur Perangkat Lunak</p>
                            <p>Produk ini sangat efektif. Kulit saya menjadi lebih halus dan bercahaya.</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (6).jpg" alt="Eka Putri" class="img-circle">
                            <h4>Eka Putri</h4>
                            <p class="title">Spesialis Pemasaran</p>
                            <p>Saya sangat menyukai produk ini. Kulit saya menjadi lebih sehat dan tidak kusam lagi.</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="image/woman (7).jpg" alt="Fitri Amalia" class="img-circle">
                            <h4>Fitri Amalia</h4>
                            <p class="title">Pengusaha</p>
                            <p>Produk ini sangat membantu mengatasi masalah kulit saya. Saya sangat merekomendasikannya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonials end -->

<!-- best product  -->
<div class="container">
    <h1 style=" text-align: center; font-weight: bolder; color: #ff6f61;">Best Product</h1>
   <p style="text-align: center;">Product terbaik</p>
    <div class="row">
        <!-- card 1 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">new</div>
                <img src="image/SK-II PITERA™ Ultraura UV Essential Set(3jt).png" alt="SK-II">
                <div class="title">SK-II PITERA™ Ultraura UV Essential Set</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 3.000.000 <span class="old-price">Rp 3.050.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">new</div>
                <img src="image/SKINTIFIC - Retinol Skin Renewal Moisturizer 30g(135).png" alt="SKINTIFIC">
                <div class="title">SKINTIFIC - Retinol Skin Renewal Moisturizer</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 125.000 <span class="old-price">Rp 135.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- card 3 -->
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="new-badge">bew</div>
                <img src="image/SKINTIFIC - MSH Niacinamide Brightening Moisturizer Gel 30g(125).png"
                    alt="SKINTIFIC">
                <div class="title">SKINTIFIC - MSH Niacinamide Brightening Moisturizer Gel</div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp 125.000 <span class="old-price">Rp 135.000</span></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- best productl end  -->

    <!-- Blog Posts start  -->
<section class="blog-posts">
<div class="container">
    <h2>Blog Terbaru</h2>
    <div class="row">
        <?php
        include "koneksi.php";
        $result = $koneksi->query("SELECT * FROM blog");
        while($row = $result->fetch_assoc()): ?>
            <div class="col-md-4">
                <div class="blog-item">
                <img src="image/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['judul']); ?>" class="img-responsive">
                    <h3 class="text-center"><?php echo htmlspecialchars($row['judul']); ?></h3>
                    <p><?php echo substr(strip_tags($row['konten']), 0, 400); ?>...</p>
                    <a href="#?id=<?php echo $row['id']; ?>">Baca Selengkapnya</a>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- Blog Posts end  -->

 <!-- Newsletter Subscription start  -->
 <section class="newsletter-section">
    <div class="container">
        <h2>Berlangganan Newsletter Kami</h2>
        <p>Dapatkan informasi terbaru tentang produk dan penawaran khusus langsung di kotak masuk Anda.</p>
        <form>
            <input type="email" placeholder="Masukkan email Anda" required>
            <button type="submit">Berlangganan</button>
        </form>
    </div>
</section>
<!-- Newsletter Subscription end  -->

<?php include 'footer.php'; ?>