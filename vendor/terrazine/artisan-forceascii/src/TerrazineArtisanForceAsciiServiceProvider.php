<?php

namespace Terrazine\ArtisanForceAscii;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class TerrazineArtisanForceAsciiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Filesystem $fs
     * @return void
     */
    public function boot(Filesystem $fs)
    {
        if ($this->app->runningInConsole()) {
            $artisan = $fs->get($this->artisanPath());

            $artisan = str_replace($this->search(), $this->replace(), $artisan, $count);

            if ($count === 1) {
                $fs->put($this->artisanPath(), $artisan);
            }
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function artisanPath() {
        return base_path('artisan');
    }

    protected function search() {
        return \Symfony\Component\Console\Output\ConsoleOutput::class;
    }

    protected function replace() {
        return \Symfony\Component\Console\Output\DecoratedConsoleOutput::class;
    }
}
