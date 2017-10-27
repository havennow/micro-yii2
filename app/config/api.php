<?php

return [
    'id' => 'diary-api',

    'basePath' => realpath(__DIR__ . '../'),

    'aliases' => [
        '@base' => realpath(__DIR__.'/../'),
    ],

    'defaultRoute' => 'diary/diaries',

    'modules' => [
      'diary' => [
          'class' => 'base\modules\diary\Module',
      ]
    ],

    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:@base/database/diary.db',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            //'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'diary/diaries'
                ],
            ],
        ],
    ],

];

