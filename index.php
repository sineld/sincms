<?php

include('inc/ayar.php');


$t = User::find(rand(78,81));
$sin = $t->to_array();


/*$t = User::find(rand(1,86));
// var_dump($sin);

echo $t->ad;
echo ' ';
echo $t->soyad;
$t->ad = 'SİNAN';
$t->soyad = 'ELDEM';
$t->save();*/

echo tema('ana',

	array(
		'sin' => $sin, 
		'icerik' => 'İÇERİK ÖRNEK METNİ', 
		'dizim' => array('ad' => 'Sinan', 'soyad' => 'Eldem', 'html' => '<i>İtalik Görünsün</i>', 'nohtml' => '<i>İtalik Görünmesin</i>'), 'sayfa' => 'Ana sayfa'), 
	array('test', 'aylar')

	);
