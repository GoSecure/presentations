<?php
header("X-XSS-Protection: 1");

$name = $_GET['name'];
$transformed_name = str_replace("<script>", "", $name);

echo "Hello ".$transformed_name;

?>