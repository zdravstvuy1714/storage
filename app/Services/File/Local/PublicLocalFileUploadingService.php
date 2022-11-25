<?php

namespace App\Services\File\Local;

use App\Services\File\FileUploadingService;

class PublicLocalFileUploadingService extends FileUploadingService
{
    protected function getDisk(): string
    {
        return 'local_public';
    }
}
