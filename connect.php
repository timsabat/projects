<?php

$config = [
	'host' => 'localhost', 
	'user' => 'root',
	'password' => '',
	'database' => 'crud'
];

try {
	
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
	
	
} catch (PDOException $error) {
	
	echo $error->getMessage();
	exit('Database error');
	
}

//WKLEJ JAKO SQL.
//TABELA
//CREATE TABLE IF NOT EXISTS `CRUD-klienci` (
// `id` int(11) NOT NULL AUTO_INCREMENT,
// `imie` text COLLATE utf8_polish_ci NOT NULL,
// `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
// `telefon` int(11) NOT NULL,
// `e-mail` text COLLATE utf8_polish_ci NOT NULL,
// PRIMARY KEY (`id`)
// ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;