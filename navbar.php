<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyBliss</title>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="dataTable/datatables.min.css">
    <link rel="stylesheet" href="style.css">
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
              <li class="<?php echo ($current_page == 'shop.php') ? 'active' : ''; ?>">
                  <a href="shop.php">Shop</a>
              </li>
              <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                  <a href="about.php">About</a>
              </li>
              <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                  <a href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar end  -->