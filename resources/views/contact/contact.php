<?php

declare(strict_types=1);

/**
 * @var App\Form\ContactForm $form
 * @var Yiisoft\Form\Widget\Field $field
 * @var Yiisoft\Router\UrlGeneratorInterface $url
 * @var string|null $csrf
 */

use Yiisoft\Form\Widget\Field;
use Yiisoft\Form\Widget\Form;
use Yiisoft\Html\Html;

$fieldConfig = [
    'inputCssClass()' => ['form-control'],
    'labelOptions()' => [['class' => 'required', 'label' => '']],
    'errorOptions()' => [['class' => 'text-left text-danger']],
];

$this->setTitle('contact');

?>

<div class="form-contact">

    <h1 class="h5 mb-3 fw-normal">
        Please fill out the following to Contact.
    </h1>

    <?= Form::widget()
        ->action($url->generate('contact'))
        ->options(
            [
                'id' => 'form-contact',
                'csrf' => $csrf,
                'enctype' => 'multipart/form-data',
            ]
        )
        ->begin() ?>

        <?= Field::Widget($fieldConfig)->config($form, 'username') ?>

        <?= Field::Widget($fieldConfig)->config($form, 'email') ?>

        <?= Field::Widget($fieldConfig)->config($form, 'subject') ?>

        <?= Field::Widget($fieldConfig)->config($form, 'body')
            ->textArea(['class' => 'form-control textarea', 'rows' => 2]) ?>

        <?= Field::Widget($fieldConfig)->config($form, 'attachFiles')
            ->fileInput(
                ['id' => 'formFileMultiple', 'type' => 'file', 'multiple' => true, 'name' => 'attachFiles[]'],
                true,
            ) ?>

        <hr class='mb-2'/>

        <div class="d-grid gap-2">
            <?= Html::submitButton(
                'Send mail ' . html::tag('i', '', ['class' => 'fas fa-share', 'aria-hidden' => 'true']),
                [
                    'class' => 'btn btn-lg btn-primary btn-block',
                    'id' => 'contact-button',
                    'tabindex' => '5'
                ]
            ) ?>
        </div>

    <?= Form::end() ?>

</div>
