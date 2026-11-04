<?php
class Stagiaire {
    public function getMoyenne($n1, $n2) {
        return ($n1 + $n2) / 2;
    }
    public function estAdmis($moyenne) {
        return $moyenne >= 10;
    }
}