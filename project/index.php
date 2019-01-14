<?php
session_start();           
$sid = session_id();
?>

<?php include "template/header.php"; ?>
<?php include "template/banner.php"; ?>
<?php include "template/service.php"; ?>
<?php include "template/about.php"; ?>

<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>A</span>rch Giutar</h5>
        <div class="tabs tabs-style-line pt-md-5">
          
            <!-- Content Panel -->
               <div class="innerf-pages section">
        <div class="fh-container mx-auto">
            <div class="row my-lg-5 mb-5">
                <!-- grid left -->
                
                <!-- //grid left -->
                <!-- grid right -->
                <div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
                    <!-- card group  -->
                    <div class="card-group">
                        <!-- card -->
                          <?php 
                            include "koneksi/koneksi.php" ;
                            $query=mysql_query(" SELECT * FROM tbl_produk ");
                            
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
            

        </div>
    </section>
      

   
    <?php include "template/footer.php"; ?>

