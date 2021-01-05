<?php

declare(strict_types=1);

use App\Command\Hello;
use App\ViewInjection\LayoutViewInjection;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;
use Yiisoft\Factory\Definitions\Reference;
use Yiisoft\Yii\View\CsrfViewInjection;

return [
    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@avatars' => '@root/public/images/avatars',
            '@mail' => '@root/resources/mail',
            '@npm' => '@root/node_modules',
            '@storage' => '@root/storage',
            '@runtime' => '@root/runtime',
            '@vendor' => '@root/vendor',
            '@views' => '@root/storage/views',
        ],
    ],

    'yiisoft/log-target-file' => [
        'fileTarget' => [
            'file' => '@runtime/logs/app.txt'
        ]
    ],

    'yiisoft/view' => [
        'basePath' => '@views',
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => Hello::class,
        ]
    ],

    'yiisoft/yii-view' => [
        'viewBasePath' => '@views',
        'layout' => '@storage/layout/main',
        'injections' => [
            Reference::to(CsrfViewInjection::class),
            Reference::to(LayoutViewInjection::class),
        ],
    ],

    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
