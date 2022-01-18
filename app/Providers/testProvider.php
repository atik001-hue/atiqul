<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class testProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data=array();
        $data['1']='Jannatul Ferdous';
        $data['2']='Atiqul Islam';
        $data['3']='Jahanara Akter';

        view()->share('name',$data);
    }
}
