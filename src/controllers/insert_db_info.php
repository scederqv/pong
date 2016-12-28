<?php
namespace pong\controllers;
require __DIR__ . '/../../vendor/autoload.php';
$players = array('liang','binyu','anttia','kena','janne','kimmo','paul','wille','aurelijus','anup','kennet','robert','miksu','simon','ville','alicja','piritta','pasij','janik','leob','leo');
$ctrl = new GenericController();
foreach($players as $player)
		$ctrl->insert_new_player($player);
	
$ctrl->insert_new_game('simon','leo','simon');
$ctrl->insert_new_game('simon','leo','simon');
$ctrl->insert_new_game('simon','leo','simon');
$ctrl->insert_new_game('anttia','leob','anttia');
$ctrl->insert_new_game('anttia','leob','anttia');
$ctrl->insert_new_game('anttia','leob','anttia');
$ctrl->insert_new_game('leob','janik','leob');
$ctrl->insert_new_game('leob','janik','leob');
$ctrl->insert_new_game('leob','janik','leob');
$ctrl->insert_new_game('anttia','ville','anttia');
$ctrl->insert_new_game('anttia','ville','anttia');
$ctrl->insert_new_game('anttia','ville','anttia');
$ctrl->insert_new_game('aurelijus','simon','aurelijus');
$ctrl->insert_new_game('aurelijus','simon','aurelijus');
$ctrl->insert_new_game('kena','simon','kena');
$ctrl->insert_new_game('kena','simon','kena');
$ctrl->insert_new_game('wille','anup','wille');
$ctrl->insert_new_game('wille','anup','wille');
$ctrl->insert_new_game('binyu','anttia','binyu');
$ctrl->insert_new_game('binyu','anttia','binyu');
$ctrl->insert_new_game('liang','janne','liang');
$ctrl->insert_new_game('liang','janne','liang');
$ctrl->insert_new_game('ville','leob','ville');
$ctrl->insert_new_game('ville','leob','ville');
$ctrl->insert_new_game('anttia','kennet','anttia');
$ctrl->insert_new_game('anttia','kennet','anttia');
$ctrl->insert_new_game('kennet','ville','kennet');
$ctrl->insert_new_game('kennet','ville','kennet');
$ctrl->insert_new_game('anttia','kena','anttia');
$ctrl->insert_new_game('anttia','kena','anttia');
$ctrl->insert_new_game('janik','leob','janik');
$ctrl->insert_new_game('janik','leob','janik');
$ctrl->insert_new_game('binyu','kena','binyu');
$ctrl->insert_new_game('anup','aurelijus','anup');
$ctrl->insert_new_game('pasij','simon','pasij');
$ctrl->insert_new_game('simon','piritta','simon');
$ctrl->insert_new_game('robert','janik','robert');
$ctrl->insert_new_game('kena','robert','kena');
$ctrl->insert_new_game('wille','aurelijus','wille');
$ctrl->insert_new_game('wille','simon','wille');
$ctrl->insert_new_game('wille','pasij','wille');
$ctrl->insert_new_game('janne','kena','janne');
$ctrl->insert_new_game('kena','wille','kena');
$ctrl->insert_new_game('binyu','wille','binyu');
$ctrl->insert_new_game('simon','anup','simon');
$ctrl->insert_new_game('anttia','janne','anttia');
$ctrl->insert_new_game('wille','leob','wille');
$ctrl->insert_new_game('janne','pasij','janne');
$ctrl->insert_new_game('anttia','wille','anttia');
$ctrl->insert_new_game('wille','robert','wille');
$ctrl->insert_new_game('anup','wille','anup');
$ctrl->insert_new_game('binyu','janne','binyu');
$ctrl->insert_new_game('janik','ville','janik');
$ctrl->insert_new_game('liang','wille','liang');
$ctrl->insert_new_game('janne','anttia','janne');
$ctrl->insert_new_game('janne','simon','janne');
$ctrl->insert_new_game('pasij','alicja','pasij');
$ctrl->insert_new_game('paul','anttia','paul');
$ctrl->insert_new_game('ville','robert','ville');
$ctrl->insert_new_game('kena','janne','kena');
$ctrl->insert_new_game('robert','leob','robert');
$ctrl->insert_new_game('kena','kennet','kena');
$ctrl->insert_new_game('kena','anup','kena');
$ctrl->insert_new_game('liang','kennet','liang');
$ctrl->insert_new_game('janne','miksu','janne');
$ctrl->insert_new_game('kena','anttia','kena');
$ctrl->insert_new_game('anup','pasij','anup');
$ctrl->insert_new_game('liang','anttia','liang');
$ctrl->insert_new_game('liang','kena','liang');
$ctrl->insert_new_game('kennet','anttia','kennet');
$ctrl->insert_new_game('anttia','janik','anttia');
$ctrl->insert_new_game('janne','kennet','janne');
$ctrl->insert_new_game('anttia','anup','anttia');
$ctrl->insert_new_game('janik','paul','janik');
$ctrl->insert_new_game('paul','leob','paul');
$ctrl->insert_new_game('kimmo','pasij','kimmo');
$ctrl->insert_new_game('ville','janik','ville');

$elo = array('liang'=>234,
'binyu'=>219,
'anttia'=>127,
'kena'=>102,
'janne'=>72,
'kimmo'=>43,
'paul'=>17,
'wille'=>8,
'aurelijus'=>0,
'anup'=>-21,
'kennet'=>-22,
'robert'=>-39,
'miksu'=>-44,
'simon'=>-45,
'ville'=>-49,
'alicja'=>-53,
'piritta'=>-54,
'pasij'=>-72,
'janik'=>-131,
'leob'=>-142,
'leo'=>-149);
foreach($elo as $player => $value){
	$ctrl->db->update_elo($player,$value);
}
?>