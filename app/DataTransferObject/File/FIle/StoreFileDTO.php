<?php

namespace App\DataTransferObject\File\FIle;

use App\Enums\File\FileVisibilityEnum;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

abstract class StoreFileDTO extends Data
{
    public function __construct(
        public readonly UploadedFile $file,
        public readonly FileVisibilityEnum $visibility,
    ) {
    }

    abstract static protected function getFileRules(): array;

    public static function rules(): array
    {
        return [
            'file' => ['required', 'file', ...static::getFileRules()],
            'visibility' => ['required', new Enum(FileVisibilityEnum::class)],
        ];
    }
}
