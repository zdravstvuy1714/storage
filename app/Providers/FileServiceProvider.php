<?php

namespace App\Providers;

use App\Interfaces\Services\File\FileUploadingService;
use App\Services\File\Cloud\CloudFileUploadingService;
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
