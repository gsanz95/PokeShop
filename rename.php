<?php
include "config.php";


$path = realpath('\path\to\files');

$di = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach($di as $name => $fio) {
    $newname = $fio->getPath() . DIRECTORY_SEPARATOR . strtolower( $fio->getFilename() );
    echo $newname, "<br><br>";
    //rename($name, $newname); //- first check the output, then remove the comment...
}
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/28/2018
 * Time: 10:51 AM
 */