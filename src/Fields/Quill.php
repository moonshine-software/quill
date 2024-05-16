<?php

declare(strict_types=1);

namespace MoonShine\Quill\Fields;

use MoonShine\Fields\Textarea;

final class Quill extends Textarea
{
    protected string $view = 'moonshine-quill::fields.quill';

    protected array $assets = [
        'vendor/moonshine-quill/css/quill.snow.css',
        'vendor/moonshine-quill/js/quill.js',
        'vendor/moonshine-quill/js/quill-init.js',
    ];
}
