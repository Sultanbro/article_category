<?php

namespace App\Providers;

use App\Repository\ArticleRepository;
use App\Repository\BaseRepository;
use App\Repository\CategoryRepository;
use App\Repository\Interface\ArticleRepositoryInterface;
use App\Repository\Interface\CategoryRepositoryInterface;
use App\Repository\Interface\EloquentRepositoryInterface;
use App\Repository\Interface\Translation\ArticleTranslationRepositoryInterface;
use App\Repository\Interface\Translation\CategoryTranslationRepositoryInterface;
use App\Repository\Translation\ArticleTranslationRepository;
use App\Repository\Translation\CategoryTranslationRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            EloquentRepositoryInterface::class,
            BaseRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            ArticleRepositoryInterface::class,
            ArticleRepository::class
        );
        $this->app->bind(
            CategoryTranslationRepositoryInterface::class,
            CategoryTranslationRepository::class
        );
        $this->app->bind(
            ArticleTranslationRepositoryInterface::class,
            ArticleTranslationRepository::class
        );
    }
}
