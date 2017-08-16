<?php
namespace Tzsk\Crypt\Provider;

use Illuminate\Support\ServiceProvider;
use Tzsk\Crypt\Crypter;

class CryptServiceProvider extends ServiceProvider
{
    /**
     * Boot Service Provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/crypt.php' => config_path('crypt.php'),
        ], 'config');

        $this->app->bind('tzsk-crypt', function () {
            return new Crypter();
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
