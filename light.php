<?php

//$gpio = $_GET['gpio'];
//$light = $_GET['light'];

$gpio = htmlspecialchars($_GET["gpio"]);
$light = htmlspecialchars($_GET["light"]);

echo $gpio;
echo '</br>';
echo $light;

$output = shell_exec('pwd');
echo "<pre>$output</pre>";

echo '</br>';
$cmd = 'sudo /var/www/html/shell/gpiophp.sh ' . $gpio . ' ' . $light;

echo $cmd;

$output = shell_exec($cmd);
echo '</br>';
echo $output;

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
