<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 
session_start();
$sid = session_id();

include "koneksi/koneksi.php";
include "koneksi/config.php";
?>


<?php 
include "template/header.php";
?>
   <div class="ibanner_w3 pt-sm-5 pt-3">
        <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
            <span>A</span>rch
            <span>G</span>uitar</h4>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Gitar</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- Shop -->
        <div class="innerf-pages section">
        <div class="fh-container mx-auto">
            <div class="row my-lg-5 mb-5">
                <!-- grid left -->
                <div class="side-bar col-lg-3">
                    <!--preference -->
                    <div class="left-side">
                        <h3 class="shopf-sear-headits-sear-head">
                            Categories</h3>
                        <ul>
                            <li>
                               <a href="semua.php" > semua</a>
                                
                            </li>
                            <?php
                            
                            $s=mysql_query("SELECT * from tbl_kategori  ");
                            while ($d=mysql_fetch_array($s)) {
                            
                            
                             ?>

                            <li>
                                <a href="Kategori.php?id_kategori_produk=<?php echo $d['id_kategori_produk'];?>"><?php echo $d['nama_kategori'];?></a>
                                
                            </li>
                        <?php } ?>
                           

                        </ul>
                    </div>
                    <!-- // preference -->
                   
                    <!-- price range -->
                 
                    <!-- //price range -->
                    <!--preference -->
                   
                    <!-- // preference -->
                    <!-- discounts -->
                  
                    <!-- //discounts -->
                    <!-- Binding -->
                    
                    <!-- //Binding -->
                    <!-- discounts -->
                  
                    <!-- //discounts -->
                    <!-- reviews -->
                 
                    <!-- //reviews -->
                </div>
                <!-- //grid left -->
                <!-- grid right -->
                <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
                    <!-- card group  -->
                    <div class="card-group">
                        <!-- card -->
                          <?php 
                            $id=$_GET['id_kategori_produk'];
                            $query=mysql_query(" SELECT * FROM tbl_produk where id_kategori_produk='$id' ");
                            
                            while($k = mysql_fetch_array($query)) 
                            {
                                

                            ?>
                        <div class="col-lg-3 col-sm-6 p-0">
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="admin/upload/<?php echo $k['gambar'];?>" alt="img" class="responsive">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize"><?php echo $k['nama_produk']; ?></h5>
                                    <div class=" d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">Rp. <?php echo number_format($k['harga']); ?></p>
                                       
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="aksi_ker.php" method="post">
                                    
                                        <input type="hidden" name="id_produk" value="<?php echo $k['id_produk']; ?>">
                                        <input type="hidden" name="harga" value="<?php echo $k['harga']; ?>">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- //card -->
                        <!-- card -->
                        
                        <!-- //card -->
                    
                        <!-- //card -->
                        <!-- card -->

                            <!-- //card -->
                            <!-- //row  -->
                        </div>
                        <!-- //card group 1-->
                        <!-- card group 2 -->
                        
                        <!-- //card group -->
                        <!-- card group  -->
                        
                        <!-- //card group -->
                        <!-- card group  -->
                        
                        <!-- //card group -->
                    </div>
                </div>
            </div>
        </div>
<?php
include "template/footer.php";
?>