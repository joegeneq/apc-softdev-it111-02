<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
         'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false ,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',  
            'username' => 'jfkuniversal@gmail.com',
            'password' => 'jfkuniversalfoundation',
            'port' => '587', 
            'encryption' => 'tls', 
            ],
        ],
		/*'i18n' => [
        'translations' => [
            'frontend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
				'language' => 'en-US',
            ],
            'backend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
				'language' => 'en-US',
            ],
        ],
    ],*/
    ],
];
