<?php

include "class.php";


$islemler = new Islemler;

echo $islemler->topla(404,56);
echo "<hr>";
echo $islemler->cikar(404,56);
echo "<hr>";
echo $islemler->rastgele(10,11);
?>