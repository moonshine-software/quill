<?php

declare(strict_types=1);

namespace MoonShine\Quill\Fields;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Textarea;

final class Quill extends Textarea
{
    protected string $view = 'moonshine-quill::fields.quill';

    protected function assets(): array
    {
        return [
            Css::make('vendor/moonshine-quill/css/quill.snow.css'),
            Js::make('vendor/moonshine-quill/js/quill.js'),
            Js::make('vendor/moonshine-quill/js/quill-init.js'),
        ];
    }
}
