<?php
    include_once "Pesawat.php";

    class Jet implements Pesawat{
        public function takeOff(): void{
            echo "Jet Telah Take Off";
        }

        public function manuver(): void{
            echo "Jet Melakukan Manuvering";
        }
    }
?>