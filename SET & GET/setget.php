<?php
    class Nilai{
        private $tugas=0;
        private $uts=0;
        private $uas=0;

        function setTugas($nilai){
            if(($nilai <= 100) && ($nilai >= 0)){
                $this->tugas = $nilai;
            }
        }

        function setUts($nilai){
            if(($nilai <= 100) && ($nilai >= 0)){
                $this->uts = $nilai;
            }
        }
        function setUas($nilai){
            if(($nilai <= 100) && ($nilai >= 0)){
                $this->uas = $nilai;
            }
        }

        function getTugas(){
            return $this->tugas;
        }

        function getUts(){
            return $this->uts;
        }

        function getUas(){
            return $this->uas;
        }

        function getNA(){
            $nilaiAkhir = 0.2 * $this->tugas+ 0.3 * $this->uts+ 0.5 * $this->uas;
            return $nilaiAkhir;
        }

        function tampil(){
            echo "Nilai Tugas : " . $this->tugas . 
            ", Nilai UTS : " . $this->uts . 
            ", Nilai UAS : " . $this->uas . 
            ", Nilai Akhir : " . $this->getNA() . "<br>";
        }
    }

    $nilai = new Nilai();
    $nilai->setTugas(100);
    echo "Nilai Tugas sekarang adalah : " . $nilai->getTugas() . "<br>";
    $nilai->setUts(80);
    $nilai->setUas(80);
    $nilai->tampil();
    $nilai->setUas(1900);
    $nilai->tampil();
    echo "Nilai Akhir adalah : " . $nilai->getNA();
?>