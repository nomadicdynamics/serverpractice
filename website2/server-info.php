<?php
// $_SERVER SUPERGLOBAL
# create server array
$server = [
  'host server name' => $_SERVER['SERVER_NAME'],
  'host header' => $_SERVER['HTTP_HOST'],
  'server software' => $_SERVER['SERVER_SOFTWARE'],
  'document root' => $_SERVER['DOCUMENT_ROOT'],
  'current page' => $_SERVER['PHP_SELF'],
  'script name' => $_SERVER['SCRIPT_NAME'],
  'absolute path' => $_SERVER['SCRIPT_FILENAME'] 

];

// echo '<pre>';
// print_r($server);
// echo '</pre>';


// create client array
$client = [
  'client system info' => $_SERVER['HTTP_USER_AGENT'],
  'client IP' => $_SERVER['REMOTE_ADDR'],
  'remote port' => $_SERVER['REMOTE_PORT']
];

// echo '<pre>';
// print_r($client);
// echo '</pre>';

?>