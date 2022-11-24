<?php

namespace App\DataTransferObject\File\Uploading;

use Spatie\LaravelData\Data;

class UploadedFileDTO extends Data
{
    public function __construct(
        public readonly string $disk,
        public readonly string $relative_path,
    ) {
    }
}
