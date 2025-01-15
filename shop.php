<?php
include 'navbar.php';
include "koneksi.php";

// Tentukan jumlah produk per halaman
$products_per_page = 12;

// Dapatkan halaman saat ini dari parameter URL, default ke 1 jika tidak ada
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Hitung offset untuk query SQL
$offset = ($page - 1) * $products_per_page;

// Dapatkan total jumlah produk
$total_products_result = $koneksi->query("SELECT COUNT(*) as total FROM produk");
$total_products_row = $total_products_result->fetch_assoc();
$total_products = $total_products_row['total'];
// Hitung total halaman
$total_pages = ceil($total_products / $products_per_page);

// Ambil produk untuk halaman saat ini
$result = $koneksi->query("SELECT * FROM produk LIMIT $products_per_page OFFSET $offset");
?>
    <!-- filter start  -->
    <div class="container">
        <div class="filter-container">
            <div class="search-input">
                <input type="text" placeholder="Search products...">
                <button class="search-btn">Search</button>
            </div>
            <div class="results-info">Showing 1–9 of 12 Results</div>
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    Sort by popular
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Sort by popular-01</a></li>
                    <li><a href="#">Sort by popular-02</a></li>
                    <li><a href="#">Sort by popular-03</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- filter end  -->

    <!-- card start  -->
    <div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="new-badge">new</div>
                    <img src="image/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>">
                    <div class="title"><?php echo $row['nama']; ?></div>
                    <div class="rating">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div class="reviews">1500 reviews</div>
                    <div class="price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></div>
                    <div class="buttons">
                        <button class="btn">Buy Now</button>
                        <button class="btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
    <!-- card end  -->

<!-- pagination start -->
<div class="container">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-centered">
            <li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($page > 1){ echo "?page=".($page - 1); } ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i = 1; $i <= $total_pages; $i++): ?>
                <li class="<?php if($page == $i){ echo 'active'; } ?>">
                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($page < $total_pages){ echo "?page=".($page + 1); } ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- pagination end -->

<?php include 'footer.php'; ?>