<?php
$url = $_SERVER["SERVER_NAME"];  
define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://smmvictor.com');
define('STYLESHEETS_URL', '//smmvictor.com' );
date_default_timezone_set('Asia/Kolkata');
error_reporting(0);
return [
  'db' => [
    'name'    =>  'smmvicto_aa' ,
    'host'    =>  'localhost',
    'user'    =>  'smmvicto_aa' ,
    'pass'    =>  'smmvicto_aa' ,
    'charset' =>  'utf8mb4' 
  ]
];
?>