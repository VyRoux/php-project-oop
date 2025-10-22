<?php
    include("waris1.php");
    
    class OrangSunda extends Orang{

    }

    class OrangInggris extends Orang{
        protected $asal = "England";

        function ucapSalam()
        {
            echo "Hello, My name is " . $this->nama . "<br>";
        }

        function ucapNegara(){
            echo "I'm from " . $this->asal . "<br>";
        }
    }

    $kabayan = new OrangSunda("Kabayan");
    $kabayan->ucapSalam();
    $william = new OrangInggris("Prince William");
    $william->ucapSalam();
    $william->ucapNegara();
?>