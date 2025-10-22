<?php
    class Orang{
        protected $nama;
        function __construct($nama){
            $this->nama = $nama;
        }

        function ucapSalam(){
            echo "Halo, Nama saya adalah " . $this->nama . "<br>";
        }


    }
?>