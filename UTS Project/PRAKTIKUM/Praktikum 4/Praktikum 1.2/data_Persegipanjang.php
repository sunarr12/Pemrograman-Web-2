<?php
require_once 'persegipanjang.php';

$persegi = new PersegiPanjang(2, 4);
echo "<br><br>Luas Persegi Panjang dengan Panjang  ". $persegi->p. ' dan Lebar '. $persegi->l . ' adalah ' .  $persegi->luasPersegiPanjang();
?>