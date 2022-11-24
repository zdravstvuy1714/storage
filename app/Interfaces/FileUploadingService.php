<?php

namespace App\Interfaces;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use Illuminate\Http\UploadedFile;

interface FileUploadingService
{
    public function upload(string $visibility, string $catalog, UploadedFile $file): UploadedFileDTO;
}
