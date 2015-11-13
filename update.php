<?php

//ini_set("display_errors", 1);
require(__DIR__ . '/autoload.php');

//create new Songs 
$model = new Song();
$model->status = 2;
$model->rate = 66;
$model->save(3);


$model = new Song(['title' => 'I can teach you', 'artist' => 'bon jovi','status'=>1]);
$model->create();

