<?php


class Islemler {


public function topla($x,$y){
	return $x+$y;
}

public function cikar($x,$y){
	return $x-$y;
}

public function kalan($x,$y){
	return $x%$y;
}

public function rastgele($x=0,$y=1000){
	return rand($x,$y);
}

}


$islemler = new Islemler;

echo $islemler->topla(404,56);
echo "<hr>";
echo $islemler->cikar(404,56);
echo "<hr>";
echo $islemler->rastgele(10,11);
?>