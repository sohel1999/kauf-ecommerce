<?php

namespace App\Providers;

use App\CategoryContract\CategoryContract;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    protected $repositories = [

        CategoryContract::class => CategoryRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryContract::class, CategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->bind(
//            'App\CategoryContract\CategoryContract',
//            'App\Repositories\CategoryRepository'
//        );
//        foreach ($this->repositories as $interface=>$repository){
//
//        }


    }
}
