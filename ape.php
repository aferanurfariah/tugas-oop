<?php
    require_once './animal.php';

    class Ape extends Animal {
        public function yell() {
            return 'Auoo';
        }
        public function getLegs() {
            return 2;
        }
    }
?>