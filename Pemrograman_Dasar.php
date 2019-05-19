<?php

class Pemrograman_Dasar extends Matakuliah {
    
    private $nim;
    private $nama;
    
    function __construct($nim, $nama, $Tugas, $UTS, $UAS) {
        parent::__construct($Tugas, $UTS, $UAS);
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getNim() {
        return $this->nim;
    }

    function getNama() {
        return $this->nama;
    }

            public function NilaiTotal($Tugas, $UTS, $UAS) {
        return parent::NilaiTotal(($Tugas*0.3),($UTS*0.3),($UAS*0.4));
    }

    
}
