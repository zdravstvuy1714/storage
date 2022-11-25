<?php

namespace App\Interfaces\Services\File;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;

interface FileUploadingService
{
    public function upload(UploadFileDTO $dto): UploadedFileDTO;
}
