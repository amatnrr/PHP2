<?php
    class Kartu {
        public $nama;

        public $produk;

        public $jumlah;

        public $harga = [
            'TV' => 4200000, 'Kulkas' => 3100000, 'Mesin Cuci' => 3800000
        ];

        public function __construct($nama, $produk, $jumlah) {
            $this->nama = $nama;
            $this->produk = $produk;
            $this->jumlah = $jumlah;
        }

        public function getNama() {
            return $this->nama;
        }

        public function getProduk() {
            return $this->produk;
        }

        public function getJumlah() {
            return $this->jumlah;
        }

        public function getTotal() {
            // Hitung Total menggunakan formula: Produk * Jumlah Barang
        $total = $this->harga[$this->produk] * $this->jumlah;
            return $total;
        }
    
        public function kartumember() {
            $total = $this->getTotal(); // Memperbaiki pemanggilan getTotal()
            if ($total < 10000000) {
                return "Kartu Member Platinum";
            } elseif ($total <= 40000000) {
                return "Kartu Member Silver";
            } elseif ($total >= 100000000) { // Mengubah batas atas untuk Kartu Member Gold
                return "Kartu Member Gold";
            } else{
                return "Data Tidak Valid";
            }
        }
}

?>