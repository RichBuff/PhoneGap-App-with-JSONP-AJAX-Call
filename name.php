<?php

$first = $_GET['first'];
$last  = $_GET['last'];

$name_arr = array();

$theName->firstname = $first;
$theName->lastname = $last;

echo $_GET['callback'] .'('. json_encode($theName) . ')';

?>
