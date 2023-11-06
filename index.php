<?php
include_once "Jet.php";
include_once "Kargo.php";

$pesawat = new Jet();
$pesawat->takeOff();
echo "<br>";
$pesawat->manuver();
echo "<br>";

$pesawat = new Kargo();
$pesawat->takeOff();
echo "<br>";
$pesawat->manuver();
echo "<br>";
?>