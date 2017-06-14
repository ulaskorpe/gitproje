<?php


class Islemler {


public function topla($x,$y){
	return $x+$y;
}

public function cikar($x,$y){
	return $x-$y;
}


}


$islemler = new Islemler;

echo $islemler->topla(404,56);

echo $islemler->cikar(404,56);

?>