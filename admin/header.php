<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyBliss</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap/fonts/glyphicons-halflings-regular.svg">
    <link rel="stylesheet" href="../fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="../DataTable/datatables.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar start  -->
    <nav class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">BeautyBliss</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                  <a href="index.php">Home</a>
              </li>
              <li class="<?php echo ($current_page == 'tambah-produk.php') ? 'active' : ''; ?>">
                  <a href="tambah-produk.php">Tambah Produk</a>
              </li>
              <li class="<?php echo ($current_page == 'tampil-produk.php') ? 'active' : ''; ?>">
                  <a href="tampil-produk.php">Tampil Produk</a>
              </li>
              <li class="<?php echo ($current_page == 'tampil-blog.php') ? 'active' : ''; ?>">
                  <a href="tampil-blog.php">Blog</a>
              </li>
              <li class="<?php echo ($current_page == 'tampil-pesan.php') ? 'active' : ''; ?>">
                  <a href="tampil-pesan.php">Pesan</a>
              </li>
              <li class="<?php echo ($current_page == 'tampil-user.php') ? 'active' : ''; ?>">
                  <a href="tampil-user.php">User</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="<?php echo ($current_page == 'profile.php') ? 'active' : ''; ?>"><a href="profile.php"><span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="../logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar end  -->
    <script src="../bootstrap/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>