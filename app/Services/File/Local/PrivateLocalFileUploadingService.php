<?php

namespace App\Services\File\Local;

use App\Services\File\FileUploadingService;

class PrivateLocalFileUploadingService extends FileUploadingService
{
    protected function getDisk(): string
    {
        return 'local_private';
    }
}
