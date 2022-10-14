<?php

class About{
    public function index($nama = 'Ulum', $pekerjaan = 'Mahasiswa'){
    echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}