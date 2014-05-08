<?php

include '../src/RarArchive.php';

$rar = RarArchive::open('test.rar');

echo '<pre>';
print_r($rar->getEntries());
//echo 'status: ' . $rar->isBroken();