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
?>