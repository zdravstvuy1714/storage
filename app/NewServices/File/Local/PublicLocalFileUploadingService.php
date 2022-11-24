<?php

namespace App\NewServices\File\Local;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\UploadedFile;

class PublicLocalFileUploadingService
{
    private FilesystemManager $storage;

    public function __construct(FilesystemManager $storage)
    {
        $this->storage = $storage;
    }

    public function upload(string $catalog, UploadedFile $file): UploadedFileDTO
    {
        $disk = 'local_public';
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
