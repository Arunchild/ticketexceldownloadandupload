<?php

namespace Arun\Excel;

use Illuminate\Support\ServiceProvider;

class ExcelServiceProvider extends ServiceProvider{
    
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'excel');
    }

    public function register(){

    }


}

