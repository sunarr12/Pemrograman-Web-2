<?php
include '../layout/header.php';
?>

<h1>Welcome To Website</h1>
<h2>"Ini adalah Artikel 2"</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase" id="produk">Produk</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_01.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Bioderma</a></h3>
            <p class="price"><del>95.00</del> &mdash; Rp 55.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_02.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Chanca Piedra</a></h3>
            <p class="price">Rp 70.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_03.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Umcka Cold Care</a></h3>
            <p class="price">Rp 120.00</p>
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <a href="shop-single.html"> <img src="images/product_04.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Cetyl Pure</a></h3>
            <p class="price"><del>45.00</del> &mdash; Rp 20.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_05.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">CLA Core</a></h3>
            <p class="price">Rp 38.00</p>
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="shop-single.html"> <img src="images/product_06.png" alt="Image"></a>
            <h3 class="text-dark"><a href="shop-single.html">Poo Pourri</a></h3>
            <p class="price"><del>Rp 89</del> &mdash; Rp 38.00</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
          </div>
        </div>
      </div>
</body>
</html>

<?php
include '../layout/footer.php';
?>