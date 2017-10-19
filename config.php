<?php
require 'environment.php';

define("BASE", "http://localhost/academia_importador/");
global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'importador';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = '';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}