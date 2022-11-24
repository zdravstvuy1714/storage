<?php

namespace App\Providers;

use App\Interfaces\FileUploadingService;
use App\NewServices\File\CloudFileUploadingService;
use App\NewServices\File\LocalFileUploadingService;
use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FileUploadingService::class, CloudFileUploadingService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
