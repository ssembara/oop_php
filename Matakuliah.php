<?php


class Matakuliah{
    private $Tugas;
    private $UTS;
    private $UAS;
    
    function __construct($Tugas, $UTS, $UAS) {
        $this->Tugas = $Tugas;
        $this->UTS = $UTS;
        $this->UAS = $UAS;
    }

    function getTugas() {
        return $this->Tugas;
    }

    function getUTS() {
        return $this->UTS;
    }

    function getUAS() {
        return $this->UAS;
    }
    
    function NilaiTotal($Tugas,$UTS,$UAS){
        return $Tugas+$UTS+$UAS;
    }
}


