<?php

namespace App\Services\File;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use Illuminate\Contracts\Filesystem\Factory as FileStorage;
use Illuminate\Http\UploadedFile;

abstract class FileUploadingService
{
    protected FileStorage $storage;

    public function __construct(FileStorage $storage)
    {
        $this->storage = $storage;
    }

    abstract protected function getDisk(): string;

    public function upload(string $catalog, UploadedFile $file): UploadedFileDTO
    {
        $relative_path = $this
            ->storage
            ->disk($this->getDisk())
            ->putFile($catalog, $file);

        return new UploadedFileDTO(
            disk: $this->getDisk(),
            relative_path: $relative_path,
        );
    }
}
