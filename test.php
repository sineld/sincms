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

echo tema('test', array('sin' => $sin, 'dizim' => array('ad' => 'Sinan', 'soyad' => 'Eldem'), 'sayfa' => 'Test'), array('test'));
