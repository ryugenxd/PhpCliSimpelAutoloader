<?php
error_reporting(E_ALL^E_WARNING);

use App\Data;

require_once("autoload.php");


$postID = (isset($argv[1]) ? (int) $argv[1] : 0);
$displayComments  = isset($argv[2]) && $argv[2] === "-c" ? true : false;
$displayArr = isset($argv[3]) && $argv[3] == 'true' ?: false;

#var_dump((new Data($postID,$displayComments,$displayArr))->displayData());

var_dump((new Data($postID,$displayComments,$displayArr))->getApi());


/*****

TESTING AUTO LOADER PHP CLI RYUGENXD

******/
