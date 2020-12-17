<?php

use Yiisoft\Html\Html;

$this->setTitle('404');

?>

<div class='jumbotron jumbotron-fluid text-center'>

    <h1 class='display-2'>
        <b>404</b>
    </h1>

    <p class='text-danger'>
        The page

        <span>
            <b><?= Html::encode($urlMatcher->getCurrentUri()->getPath()) ?></b>
        </span>

        not found.
    </p>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>

    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    <a class ='btn btn-danger mt-5' href=<?= $url->generate('index') ?>>
        Go Back Home
    </a>

</div>
