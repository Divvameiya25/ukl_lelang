<?php
    session_start();
    if($_POST){
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];
        $harga_awal = $_POST['harga_awal'];
        $deskripsi = $_POST['deskripsi'];

        include "../config/database_connaction.php";
        $insert_detilTransaksi=mysqli_query($db,"insert into tb_barang (nama_barang, tgl, harga_awal, deskripsi_barang) value ('".$nama."','".$tanggal."', '".$harga_awal."', '".$deskripsi."')") or die(mysqli_error($conn));
        if($insert_detilTransaksi){
            echo "<script>alert('Sukses menambahkan barang');location.href='../view/show_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan barang');location.href='../view/add_barang.php';</script>";
        }
    }

    // if($_POST){
    //     $qry_barang=mysqli_query($db,"select * from tb_barang   where id_buku = '".$_GET['id_buku']."'");
    //     $dt_buku=mysqli_fetch_array($qry_get_buku);
    //     $_SESSION['cart'][]=array(
    //     'id_buku'=>$dt_buku['id_buku'],
    //     'nama_buku'=>$dt_buku['nama_buku'],
    //     'qty'=>$_POST['jumlah_pinjam']
    //     );
    // }
?>