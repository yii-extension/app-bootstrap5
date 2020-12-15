<?php

declare(strict_types=1);

namespace App\Asset;

use Yiisoft\Assets\AssetBundle;
use Yiisoft\Yii\Bootstrap5\Assets\BootstrapAsset;

final class AppAsset extends AssetBundle
{
    public ?string $basePath = '@assets';
    public ?string $baseUrl = '@assetsUrl';
    public ?string $sourcePath = '@resources/asset/css';

    public array $css = [
        'site.css'
    ];

    public array $depends = [
        BootstrapAsset::class,
        BootstrapIconsAsset::class,
    ];
}
