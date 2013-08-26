<?php

// Tema'ya yansıyacak ayarlar
$ayar = array();
$ayar['url']   = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).DIRECTORY_SEPARATOR;
$ayar['root']  = dirname(dirname(__FILE__)."../").DIRECTORY_SEPARATOR;
$ayar['title'] = 'Ezgi Home';

$ayar['lang'] = array(
    'tr' => array('iso' => 'tr', 'name' => 'Türkçe', 'dir' => 'ltr'),
    'en' => array('iso' => 'en', 'name' => 'English', 'dir' => 'ltr'),
    'sa' => array('iso' => 'sa', 'name' => 'العربية', 'dir' => 'rtl'),
    'ru' => array('iso' => 'ru', 'name' => 'Русска', 'dir' => 'ltr'),
    'ua' => array('iso' => 'ua', 'name' => 'Український', 'dir' => 'ltr'),
);

// Gizli ayarlar
$ayr = array();
$ayr['admin'] = 'Sinan Eldem';
$ayr['sifre'] = '123456';

include('start.php');