<?php

use Produk as GlobalProduk;

class Produk
{
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $type;

    public function __construct($judul  = "judul", $penulis  = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $type)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = " {$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->type == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->waktuMain == "game") {
            $str .= " - {$this->waktuMain} Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kisioto", "Shonen jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
