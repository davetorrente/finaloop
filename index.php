<?php

require 'Chest.php';
require 'Lock.php';

$chest = new Chest(new Lock);
$chest->open();
$chest->closed();
$chest->open();
$chest->open();

$chest->closed();