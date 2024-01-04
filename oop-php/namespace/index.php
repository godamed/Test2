<?php
require_once 'app/init.php';

// $produk1 = new Komik("Naruto","Mahashi Kishimoto", "Shonen Jump", 300000, 100);
// $produk2 = new Game("GodWar","Neil Druckmann","Sony Computer", 500000, 50);
// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak()."<hr>";

use app\produk\User as ProdukUser;
use app\service\User as ServiceUser;
new ServiceUser();
echo "<br>";
new ProdukUser();
