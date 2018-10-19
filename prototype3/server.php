<?php
include 'vendor/autoload.php';

\TusPhp\Config::set('config.dev.php');

$server   = new \TusPhp\Tus\Server(); // Leave empty for file based cache
$response = $server->serve();

$response->send();

exit(0); // Exit from current PHP process.
?>
