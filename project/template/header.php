
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Arch Guitar Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="c/util.css">
  <link rel="stylesheet" type="text/css" href="c/main.css">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
        <style>
.responsive {
    width: 100%;
    max-width: 200px;
    height: auto;
}

.image-grid {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin: 0 auto 35px;
  max-width: 920px;
}

.image-fit {
  -webkit-flex: 0 0 auto;
      -ms-flex: 0 0 auto;
          flex: 0 0 auto;
  margin: 5px;
  position: relative;
  width: calc(25% - 10px);
}
.image-fit-placeholder {
  height: 100%;
  visibility: hidden;
  width: 100%;
}
.image-fit-img {
  bottom: 0;
  height: 100%;
  left: 0;
  object-fit: cover;
  object-position: center;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}
</style>
</head>

<body>
     <!-- header -->
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <a class="navbar-brand" href="index.html">ag
                    </a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                        <select class="form-control input-lg" name="category">
                            <option value="all">Cari pada Toko Kami</option>
                            <optgroup label="Gitar">
                                <option value="T-Shirts">Gitar Akustik</option>
                                <option value="coats-jackets">Gitar Elektrik</option>
                                <option value="Shirts">Gitar Bass</option>
                               
                            </optgroup>
                            <optgroup label="Biola">
                            </optgroup>
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Cari">
                    </form>
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        <!-- sigin and sign up -->
                        

                        <!-- sigin and sign up -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                              

      <div class="header-wrapicon2 ">
        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
        

        <!-- Header cart noti -->
        <div class="header-cart header-dropdown">
          <?php


          include "koneksi/koneksi.php";
          include "koneksi/config.php";  
      
          
           $sql = mysql_query ("select * from tbl_order, tbl_produk where tbl_order.id_session='$sid' AND tbl_order.id_produk=tbl_produk.id_produk");
                  $total=0;
          while($d=mysql_fetch_array($sql)){

          
          $subtotal    = $d['harga']* $d['jumlah'];
          $total = $total + $subtotal;
          ?>
              <ul class="header-cart-wrapitem">
                <li class="header-cart-item">
                  <div class="header-cart-item-img">
                    <img src="admin/upload/<?php echo $d['gambar'];?>" alt="IMG">
                  </div>

                  <div class="header-cart-item-txt">
                    <a href="keranjang.php" class="header-cart-item-name">
                      <?php echo $d['nama_produk']; ?>
                    </a>

                    <span class="header-cart-item-info">
                      <?php echo number_format("$subtotal"); ?>
                    </span>
                  </div>
                </li>

                
              </ul>

              <div class="header-cart-total">
                Rp. <?php echo number_format($total);?>
              </div>
<?php } ?>
              <div class="header-cart-buttons">
                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="keranjang.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    View Cart
                  </a>
                </div>

                <div class="header-cart-wrapbtn">
                  <!-- Button -->
                  <a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Check Out
                  </a>
                </div>
              </div>
        </div>
      </div>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link  active" href="index.html">Halaman Utama
                                <span class="sr-only">(current)</span>
                            </a>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Tentang Kami</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
        </div>
        <!-- //header container -->
    </header>