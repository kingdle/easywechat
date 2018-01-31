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

];

$app = Factory::officialAccount($config);
// $app = Factory::work($config);//企业号，针对企业号下的单个应用
// $app = Factory::openPlatform($config);//开放平台
// $app = Factory::miniProgram($config);//小程序
// $app = Factory::payment($config);//微信支付

$response = $app->user->list();

print_r($response);