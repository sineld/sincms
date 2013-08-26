<?php

include('inc/ayar.php');


$islem = FALSE;
$hata = array();
$giden = FALSE;
if($_POST){


	if ($_POST['textfield'] == '')
	{
		$hata['textfield'] = 'textfield boş olamaz';
	}
	elseif($_POST['iki'] == '')
	{
		$hata['iki'] = 'iki boş olamaz';
	}
	else{
	$islem = 'post';		
	}
	$giden = $_POST;
}


// tema($dosya, $dizi, array $parcalar = null)

$dizi = array('degisken' => array('Naviki Hevdıga', 'Gunde Gelo', 'Helıksan'));
$araba = array('Mercedes', 'peugeot', 'Ford');

echo tema(


	'sersin',

	array('post' => $islem, 'hata' => $hata, 'giden' => $giden, 'sayfa' => 'hfhdfhfdh','isim' => 'Sinan & Servet', 'araba_marka' => $araba, 'dizi' => $dizi), 

	array('araba', 'koyler')

);

/*
echo tema('sersin',

	array(
		'sin' => $sin, 
		'icerik' => 'İÇERİK ÖRNEK METNİ', 
		'dizim' => array('ad' => 'Sinan', 'soyad' => 'Eldem', 'htyl' => '<i>İtalik Görünsün</i>', 'nohtml' => '<i>İtalik Görünmesin</i>'), 'sayfa' => 'Ana sayfa'), 
	array('test', 'aylar')

	);
*/