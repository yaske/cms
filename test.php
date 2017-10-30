<?php 

require 'base.php';

$query = engine\sql::query('SELECT * FROM user');

while ($row = $query -> result()) {
	# code...
}

$query -> close();