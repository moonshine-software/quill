<?php

declare(strict_types=1);

namespace MoonShine\Quill\Providers;

use Illuminate\Support\ServiceProvider;

final class QuillServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-quill');


        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-quill'),
        ], ['moonshine-quill-assets', 'laravel-assets']);
    }
}
