<?php

declare(strict_types=1);

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\ViewRenderer;

final class Index
{
    public function run(ViewRenderer $viewRenderer): ResponseInterface
    {
        return $viewRenderer->render('site/index');
    }
}
