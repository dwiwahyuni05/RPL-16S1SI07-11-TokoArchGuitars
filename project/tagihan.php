<?php
session_start();
$sid = session_id();
include "koneksi/config.php";
include "koneksi/koneksi.php";



function isi_keranjang(){
    $isikeranjang=array();
    $sid =  session_id();
    $sql = mysql_query("SELECT * FROM tbl_order WHERE id_session='$sid'") or die(mysql_error());
    while($r=mysql_fetch_array($sql)){
        $isikeranjang[]=$r;
    }
    return $isikeranjang;
}

      
                    

$tgl_skrg = date("Y-m-d");
$nama=$_POST['name'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$telpon=$_POST['telpon'];
$kota=$_POST['kota'];

mysql_query("insert into tbl_pembelian(nama, alamat,provinsi, email, no_telp, tanggal_beli, status_order) 
values ('$nama', '$alamat','$kota','$email', '$telpon', '$tgl_skrg', 'Belum dikirim')");
//mysql_query("insert into tbl_pembelian(nama, alamat, email, no_telp, tanggal_beli, status_order, biaya_kirim) 
//values ('ttt', 'hhh','gggg', 'yyy', 'ttt', 'P', '45')");

$id_orders=mysql_insert_id();


mysql_query("update tbl_order set id_pembelian = $id_orders where id_session = $sid");

$isikeranjang=isi_keranjang();
$jml=count($isikeranjang);

for ($i=0; $i<$jml; $i++){
	mysql_query("insert into tbl_detail_order(id_order, id_produk, jumlah, harga) values ('$id_orders',
	{$isikeranjang[$i]['id_produk']}, {$isikeranjang[$i]['jumlah']}, {$isikeranjang[$i]['harga']})");
	
}

for ($i=0; $i<$jml; $i++){
	mysql_query("delete from tbl_order where id_order={$isikeranjang[$i]['id_order']}");
	
}



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
                   
                </div>
             
                <div class="row checkout-left mt-5">
                    
                    <div class="col-md-8 address_form">
                        <h4>alamat tagihan</h4>
                        <form action="selesai.php" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Nama lengkap: </label>
                                            <input readonly class="billing-address-name form-control" type="text"  value="<?php echo $nama ?> ">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Nomor Telephon:</label>
                                                    <input readonly class="form-control" type="text" value="<?php echo $telpon ?>">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Email: </label>
                                                    <input readonly class="form-control" type="text" value="<?php echo $email ?>" >
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Kota: </label>
                                            <input readonly class="form-control" type="text" value="<?php echo $kota ?>" >
                                        </div>
                                        </div>

                                         <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Alamat: </label>
                                            <input readonly class="form-control" type="text" value="<?php echo $alamat ?>" >
                                        </div>
                                        </div>

                                         <div class="card_number_grid_right">
                                        <div class="controls">
                                            <label class="control-label">Konfirmasi: </label>
                                           <input type="hidden" name="id_order" value="<?php echo $id_orders; ?>">
                             <input type="file" name="gambar">
                                        </div>
                                        </div>
                                       
                                    </div>
                                    <button class="submit check_out">tempat pesanan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php include "template/footer.php"; ?>
