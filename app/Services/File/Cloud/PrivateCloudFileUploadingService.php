<?php

namespace App\Services\File\Cloud;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\UploadedFile;

class PrivateCloudFileUploadingService
{
    private FilesystemManager $storage;

    public function __construct(FilesystemManager $storage)
    {
        $this->storage = $storage;
    }

    public function upload(string $catalog, UploadedFile $file): UploadedFileDTO
    {
        $disk = 's3_private';
        $relative_path = $this
            ->storage
            ->disk($disk)
            ->putFile($catalog, $file);

        return new UploadedFileDTO(
            disk: $disk,
            relative_path: $relative_path,
        );
    }
}
