<?php

namespace App\DataTransferObject\File;

use App\Enums\File\FileVisibilityEnum;
use Spatie\LaravelData\Data;

class FileDTO extends Data
{
    public function __construct(
        public readonly string $original_name,
        public readonly string $mime_type,
        public readonly string $relative_path,
        public readonly string $disk,
        public readonly string $scope,
        public readonly string $size,
        public readonly FileVisibilityEnum $visibility,
    ) {
    }
}
