<?php

//ini_set("display_errors", 1);
require(__DIR__ . '/autoload.php');
$db = new BaseModel;

$songs = $db->query("SELECT * FROM song");
echo "<pre>";
print_r($songs);

//create new Songs 
$model = new Song();
$model->title = 'Disaat Aku Tersakiti';
$model->artist = 'Dadali';
$model->album = ' Disaat Aku Tersakiti';
$model->createDate = date("Y-m-d H:i:s");
$model->status = 1;
$model->create();

