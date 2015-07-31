<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'app.partials.navLists', function($view) {
                return $view->with('userLists', \App\ListModel::where('user_id', \Auth::user()->id)->get());
            });
        view()->composer(
            'app.partials.nav', function($view) {
                return $view->with('user', Auth::user());
            });
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
}
