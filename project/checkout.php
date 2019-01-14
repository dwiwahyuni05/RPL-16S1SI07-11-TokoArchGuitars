   


<?php 
session_start();
$sid = session_id();



include "koneksi/koneksi.php";
include "koneksi/config.php";





?>




<?php include "template/header.php"; ?>


<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Halaman Utama</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>


    <section class="checkout_wthree py-sm-5 py-3">
        <div class="container">
            <div class="check_w3ls">
                <div class="d-sm-flex justify-content-between mb-4">
                    <h4>Tinjau pesanan Anda

                    </h4>
                    <h4 class="mt-sm-0 mt-3">Keranjang belanja Anda berisi:
                        <span>1 Produk</span>
                    </h4>
                </div>
             <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Nama Produk</th>

                                <th>Harga</th>
                                <th>Hapus</th>
                            </tr>

                        </thead>
<?php
                             $sql = mysql_query ("select * from tbl_order, tbl_produk where tbl_order.id_session='$sid' AND tbl_order.id_produk=tbl_produk.id_produk");

                                $total=0;
                    while($d=mysql_fetch_array($sql)){

                    
                    $subtotal    = $d['harga']* $d['jumlah'];
                    $total = $total + $subtotal;
                    ?>
                        <tbody>
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">
                                    <a href="single_product.html">
                                        <img src="admin/upload/<?php echo $d['gambar'];?>" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span><?php echo $d['jumlah']; ?></span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert"><?php echo $d['nama_produk']; ?></td>

                                <td class="invert">Rp. <?php echo number_format("$subtotal"); ?></td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>

                                </td>
                            </tr>
                          
                        

                        </tbody>
                    <?php } ?>
                    </table>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Lanjut ke Keranjang</h4>
                         <ul>
                            
                            <li>Total
                                <i>-</i>
                                <span>Rp<?=number_format($total)?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form">
                        <h4>alamat tagihan</h4>
                        <form action="tagihan.php" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Nama lengkap: </label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="isi nama">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Nomor Telephon:</label>
                                                    <input class="form-control" type="text" placeholder="isi nomor telpon" name="telpon">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Email: </label>
                                                    <input class="form-control" type="text" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Kota: </label>
                                            <input class="form-control" type="text" placeholder="jogjakarta" name="kota">
                                        </div>
                                        </div>

                                         <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Alamat: </label>
                                            <input class="form-control" type="text" placeholder="Alamat" name="alamat">
                                        </div>
                                        </div>
                                       
                                    </div>
                                    <button class="submit check_out">proses ke tagihan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <?php include "template/footer.php"; ?>
