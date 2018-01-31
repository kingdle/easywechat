<?php

require __DIR__.'/vendor/autoload.php';

use EasyWeChat\Factory;

$config = [
	'app_id' => 'wx286efb3424d51095',
	'secret' => '4f66978891d521a9f1772cda0e4fa670',

	'log' => [
		'file' =>__DIR__.'/easywechat.log',
		'level' =>'debug',
	],

	'response_type' => 'collection'//array(default)/collection/object/raw/自定义类名

	

];

$app = Factory::officialAccount($config);

var_dump($app->user->list());