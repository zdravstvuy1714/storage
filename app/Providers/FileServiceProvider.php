<?php

namespace App\Providers;

use App\Interfaces\FileUploadingService;
use App\Services\File\CloudFileUploadingService;
use App\Services\File\LocalFileUploadingService;
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
