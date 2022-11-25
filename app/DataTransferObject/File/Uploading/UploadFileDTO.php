<?php

namespace App\DataTransferObject\File\Uploading;

use App\Enums\File\FileVisibilityEnum;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Data;

class UploadFileDTO extends Data
{
    public function __construct(
        public readonly UploadedFile $file,
        public readonly string $catalog,
        public readonly FileVisibilityEnum $visibility,
    ) {
    }
}
