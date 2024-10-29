<?php
class Laptob {
    var $pemilik;
    var $merek;

    function tampilkan_nama_pemilik() { 
        return "nama pemilik wahyu sani<br/>";
    }

    function tampilkan_merek() {
        return "merek laptob acer";
    }
}

$laptob = new Laptob();
echo $laptob->tampilkan_nama_pemilik();
echo $laptob->tampilkan_merek();
?>
