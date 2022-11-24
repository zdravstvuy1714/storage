<?php

namespace App\DataTransferObject\File\Uploading;

use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;

class UploadFileDTO extends Data
{
    public function __construct(
        public readonly string $visibility,
        public readonly UploadedFile $file,
        public readonly string $catalog,
    ) {
    }
}
