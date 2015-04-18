<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false ,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',  
            'username' => 'ecdadlla@gmail.com',
            'password' => 'Hi8fowor',
            'port' => '587', 
            'encryption' => 'tls', 
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		
		
    ],
			
    'params' => $params,
];
