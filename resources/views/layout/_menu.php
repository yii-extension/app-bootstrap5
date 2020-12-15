<?php

declare(strict_types=1);

/**
 * @var App\ApplicationParameters $app
 * @var Yiisoft\Yii\Web\User\User $user
 * @var array $menuItems
 */

use Yiisoft\Yii\Bootstrap5\Nav;
use Yiisoft\Yii\Bootstrap5\NavBar;
use Yiisoft\Html\Html;

$menuItems =  $app->get('nav.guest');
?>

<?= NavBar::widget($app->get('navBar.config'))->begin() ?>

    <?= Nav::widget()
        ->currentPath($url->generate($urlMatcher->getCurrentRoute()->getName()))
        ->items($menuItems)
        ->options(['class' => 'navbar-nav me-auto'])
    ?>

<?= NavBar::end();
