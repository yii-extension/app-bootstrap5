<?php

declare(strict_types=1);

use App\Asset\AppAsset;
use App\Asset\BootstrapIconsAsset;
use Yii\Extension\Widget\AlertMessage;
use Yiisoft\Html\Html;

/**
 * @var App\ApplicationParameters $app
 * @var Yiisoft\Assets\AssetManager $assetManager
 * @var string $csrf
 * @var string $content
 */

$assetManager->register([
    AppAsset::class
]);

$aliases->set('@icons', $assetManager->getBundle(BootstrapIconsAsset::class)->baseUrl);

$this->setCssFiles($assetManager->getCssFiles());
$this->setJsFiles($assetManager->getJsFiles());
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html class="h-100" lang="en">

        <?= $this->render('_head', ['csrf' => $csrf]) ?>

        <?php $this->beginBody() ?>

            <body class="d-flex h-100 text-center text-black">
                <div class="cover-container-fluid d-flex w-100 h-100 mx-auto flex-column">
                    <header class="mb-auto">
                        <?= $this->render('_menu', ['urlMatcher' => $urlMatcher]) ?>
                        <?= AlertMessage::widget() ?>
                    </header>

                    <main class="px-3">
                        <?= $content ?>
                    </main>

                    <footer class='mt-auto bg-dark py-3'>
                        <?= $this->render('_footer', ['aliases' => $aliases]) ?>
                    </footer>

                </div>

            </body>

        <?php $this->endBody() ?>
    </html>
<?php $this->endPage() ?>
