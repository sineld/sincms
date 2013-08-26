<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

foreach ($ayar['lang'] as $key => $value) {
	$langs[] = $key;
}

if(isset($_GET['lang']) AND in_array($_GET['lang'],  $langs))
{
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
elseif(isset($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
}
elseif(isset($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'tr';
}

include('lng/tr.php'); // Varsayılan dil dosyası
$ayar['dil'] = $ayar['lang'][$lang];
include("lng/{$ayar['dil']['iso']}.php");

require_once('mustache/Mustache.php');
require_once('php-activerecord/ActiveRecord.php');

ActiveRecord\Config::initialize(function($cfg)
{
	$connections = array(
		'mysql' => 'mysql://username:password@localhost/mysql',
    	'sqlite' => 'sqlite://inc/db/ezghom.sqlite'
    );
	$cfg->set_model_directory('inc/php-activerecord/models');
    $cfg->set_connections($connections);
    $cfg->set_default_connection('sqlite');
});

//include('asido.php');
include('func.php');
include('model.php');