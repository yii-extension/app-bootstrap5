<?php

declare(strict_types=1);

/**
 * @var App\ApplicationParameters $app
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var string $csrf
 * @var string $content
 */


use App\Asset\AppAsset;
use Yii\Extension\Widget\AlertMessage;
use Yiisoft\Html\Html;

$assetManager->register([
    AppAsset::class
]);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());
?>

<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html class = "h-100" lang = <?= $app->get('app.language') ?>>

        <?= $this->render('_head', ['app' => $app, 'csrf' => $csrf]) ?>

        <?php $this->beginBody() ?>

            <body class = "d-flex h-100 text-center text-black">

                <div class="cover-container-fluid d-flex w-100 h-100 mx-auto flex-column">

                    <header class = "mb-auto">

                        <?= $this->render('_menu', ['app' => $app, 'url' => $url, 'urlMatcher' => $urlMatcher]) ?>
                        <?= AlertMessage::widget() ?>

                    </header>

                    <main class = "px-3">
                        <?= $content ?>
                    </main>

                    <footer class = 'mt-auto bg-dark py-3'>

                        <?= $this->render('_footer') ?>

                    </footer>

                </div>

            </body>

        <?php $this->endBody() ?>

    <?= Html::endTag('html') ?>

<?php $this->endPage() ?>
