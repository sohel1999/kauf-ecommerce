<?php

namespace App\Providers;

use App\CategoryContract\CategoryContract;
use App\Contracts\AttributeContact;
use App\Repositories\AttributeRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    protected $repositories = [

        CategoryContract::class => CategoryRepository::class,
        AttributeRepository::class => AttributeRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryContract::class, CategoryRepository::class);
        $this->app->bind(AttributeContact::class,AttributeRepository::class);

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
