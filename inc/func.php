<?php

function icerik_al($dosya)
{
    return file_get_contents("templ/{$dosya}.tpl");
}

function tema($dosya, $dizi, array $parcalar = null)
{
	global $ayar, $dil;

    $sabit_parcalar = array('blok', 'iletisim');

    $parcalar = is_array($parcalar) ? $parcalar : array();
    $parcalar = array_merge(array($dosya), $sabit_parcalar, $parcalar);

    foreach ($parcalar as $parca) {
        $part[$parca] = icerik_al($parca);
    }

    $partials = array_merge(array('sablon' => icerik_al($dosya)), $part);

    $degiskenler = array_merge($dil, $dizi, $ayar);
    $m = new Mustache;
    
    return $m->render(
        icerik_al('tema'), 
        $degiskenler, 
        $partials
    );
}