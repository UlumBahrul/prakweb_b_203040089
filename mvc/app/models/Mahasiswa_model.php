<?php

class Mahasiswa_model
{
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    // private $mhs = [
    //     [
    //         "nama" => "Bahrul Ulum",
    //         "nrp" => "203040089",
    //         "email" => "203040089@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Khoerul Anam",
    //         "nrp" => "203040096",
    //         "email" => "203040096@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Muhammad Nadzil Romadhon",
    //         "nrp" => "203040101",
    //         "email" => "203040101@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Industri"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
