<?php
    include_once "Pesawat.php";

    class Kargo implements Pesawat{
        public function takeOff(): void{
            echo "Kargo Telah Take Off";
        }

        public function manuver(): void{
            echo "Kargo Melakukan Manuvering";
        }
    }
?>