<?php

namespace App\Services\File\Cloud;

use App\Services\File\FileUploadingService;

class PublicCloudFileUploadingService extends FileUploadingService
{
    protected function getDisk(): string
    {
        return 's3_public';
    }
}
