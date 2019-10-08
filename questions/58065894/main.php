<?php

// Just an answer from https://stackoverflow.com/a/58179256/157675
// Credit: @maximkou

require __DIR__ . '/vendor/autoload.php';

$pathZip = __DIR__ . '/output.zip';

$resultArchive = fopen($pathZip, 'w');

$options = new ZipStream\Option\Archive();
$options->setSendHttpHeaders(false);
$options->setOutputStream($resultArchive);

$zip = new ZipStream\ZipStream('example.zip', $options);

$fileList = [
    'test.txt' => 'hello world',
];

$time = new \DateTime('@1543912899');
var_dump($time);

foreach($fileList as $fileName => $fileContents)
{
    $fileOptions = new ZipStream\Option\File();
    $fileOptions->setTime($time); // set your custom date, by default is NOW
    $zip->addFile($fileName, $fileContents, $fileOptions);
}

$zip->finish();

fclose($resultArchive);
