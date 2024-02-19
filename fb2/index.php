<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../../fontawesome/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Yow watsup</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="index.php?modul=home">HOME</a></li>
            <li><a href="index.php?modul=product">PRODUCT</a></li>
            <li><a href="index.php?modul=blog">BLOG</a></li>
            <li><a href="index.php?modul=contact">CONTACT</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
        </div>
    </header>
    <div id="main-content">
    <?php 
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    } else {
        $pages = "home";
    }
                
    if(!isset($_GET['modul']) || $pages == "home"){
    ?>
    <div id="content-home">
    <h1>Title Home</h1>
    <p> Ini halaman pertama<br>
    Have a great day all</p>
    </div>

    <?php
    } if ($pages == "product"){
    ?>
    <div id="content-product">
    <h1>Title Product</h1>
    <a href="index.php?modul=product1">Product1</a>
    <a href="index.php?modul=product2">Product2</a>
    <a href="index.php?modul=product3">Product3</a>
    </div>

    <?php
    } if ($pages == "product1") {
    ?>
    <div id="content-product1">
        <h1>Produk Olahraga</h1>
        <ul>
            <li>Bola</li>
            <li>Matras</li>
            <li>Tongkat</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "product2") {
    ?>
    <div id="content-product2">
        <h1>Produk Elektronik</h1>
        <ul>
            <li>Kipas</li>
            <li>Televisi</li>
            <li>Kosmos</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "product3") {
    ?>
    <div id="content-product3">
        <h1>Produk Furnitur</h1>
        <ul>
            <li>Meja</li>
            <li>Kursi</li>
            <li>Lemari</li>
            <li><a href="index.php?modul=product">Klik disini untuk kembali ke halaman Produk</a></li>
        </ul>
    </div>

    <?php
    } if ($pages == "blog"){
    ?>
    <div id="content-blog">
    <h1>Title Blog</h1>
    </div>

    <?php
    } if ($pages == "contact"){
    ?>
    <div id="content-contact">
    <h1>Title Contact</h1>
    <a href="index.php?modul=aboutme">Tentang saya</a>
    </div>

    <?php
    } if ($pages == "aboutme") {
    ?>
    <div id="content-about">
        <h1>Tentang Saya</h1>
        <label>Nama saya Muhammad Raihan Syahfitrah</label>
    </div>

    <?php
    }
    ?>
         
    </div>
</body>
</html>