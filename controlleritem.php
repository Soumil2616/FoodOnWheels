<?php
include 'modelitem.php';

$ob = new fullmodel;
 //================================== special pizza select ===================================//
$ob_special_item =  $ob->special_item($connect,'fixed_item');

