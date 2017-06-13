<?php


class Islemler {


public function topla($x,$y){
	return $x+$y;
}

}


$islemler = new Islemler;

echo $islemler->topla(404,56);

?>