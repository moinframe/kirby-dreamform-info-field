<?php

use Kirby\Cms\App as Kirby;

@include_once __DIR__ . '/lib/InfoField.php';

\tobimori\DreamForm\DreamForm::register(InfoField::class);

Kirby::plugin('moinframe/dreamform-info-field', [
    'snippets' => [
        'dreamform/fields/info' => __DIR__ . '/snippets/info-field.php',
    ],
    'translations' => [
        'en' => [
            'moinframe.dreamform-info-field.title' => 'Info',
            'moinframe.dreamform-info-field.label' => 'Text',
            'moinframe.dreamform-info-field.placeholder' => 'Enter your text here',
        ],
        'de' => [
            'moinframe.dreamform-info-field.title' => 'Info',
            'moinframe.dreamform-info-field.label' => 'Text',
            'moinframe.dreamform-info-field.placeholder' => 'Geben Sie hier Ihren Text ein',
        ],
    ],
]);
