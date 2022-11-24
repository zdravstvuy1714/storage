<?php

namespace App\DataTransferObject\File;

use App\Enums\File\FileVisibilityEnum;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

abstract class StoreFileDTO extends Data
{
    public function __construct(
        public readonly UploadedFile $file,
        #[Required, Enum(FileVisibilityEnum::class)]
        public readonly string $visibility,
    ) {
    }
}
