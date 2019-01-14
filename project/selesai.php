<?php
include "koneksi/config.php";
include "koneksi/koneksi.php";


$id_order = $_POST['id_order'];
$nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
 

$path = "images/upload/" . $nama_file;
	if($nama_file==""){
	$querySimpan =mysql_query("update tbl_pembelian set gambar = '$nama_file' where id_order = $id_order");
        if ($querySimpan) {
             //echo "('Data Produk Berhasil Masuk')";
        }
	}else{
    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {// Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
        // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
        if ($ukuran_file <= 1000000) {// Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
            // Proses upload
            if (move_uploaded_file($tmp_file, $path)) {// Cek apakah gambar berhasil diupload atau tidak
                // Jika gambar berhasil diupload, Lakukan :
                // Proses simpan ke Database
                $querySimpan =mysql_query("update tbl_pembelian set gambar = '$nama_file' where id_order = $id_order");

                if ($querySimpan) {// Cek jika proses simpan ke database sukses atau tidak
                    // Jika Sukses, Lakukan :
                    echo "('Data Produk Berhasil Masuk')";
                } else {
                    // Jika Gagal, Lakukan :
                    echo "('Data Produk Berhasil Masuk'); ";
                }
            } else {
                // Jika gambar gagal diupload, Lakukan :
                echo "('Data Gambar Produk Gagal Dimasukkan');";
            }
        } else {
            // Jika ukuran file lebih dari 1MB, lakukan :
            echo "('Data Gambar Produk Gagagl Dimasukkan Karena Ukuran Melebihi 1 MB');";
        }
    } else {
        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
        echo "('Data Gambar Produk Gagal Dimasukkan Karena Tidak Berekstensi JPG/JPEG/PNG');";
    }
    }   




//mysql_query("insert into tbl_pembelian(nama, alamat, email, no_telp, tanggal_beli, status_order, biaya_kirim) 
//values ('ttt', 'hhh','gggg', 'yyy', 'ttt', 'P', '45')");

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
                   <p>Barang yang anda pesan akan segera dikirim</p>
                </div>
             
            
            </div>
        </div>
    </section>



      <?php include "template/footer.php"; ?>