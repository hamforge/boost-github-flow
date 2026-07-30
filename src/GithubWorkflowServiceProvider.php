<?php

declare(strict_types=1);

namespace Hamforge\GithubWorkflow;

use Illuminate\Support\ServiceProvider;

class GithubWorkflowServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GithubWorkflow::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }
    }
}
