<?php

require_once 'File.php';

$file = new File('text.txt');

$file->write('Bonjour monde !');
$file->close();