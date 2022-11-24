<?php

namespace App\NewServices\File\Cloud;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\UploadedFile;

class PublicCloudFileUploadingService
{
    private FilesystemManager $storage;

    public function __construct(FilesystemManager $storage)
    {
        $this->storage = $storage;
    }

    public function upload(string $catalog, UploadedFile $file): UploadedFileDTO
    {
        return new UploadedFileDTO(
            disk: $this->getDisk(),
            relative_path: $this->getRelativePath($catalog, $file),
        );
    }

    private function getDisk(): string
    {
        return 's3_public';
    }

    private function getRelativePath(string $catalog, UploadedFile $file): string
    {
        return $this
            ->storage
            ->disk($this->getDisk())
            ->putFile($catalog, $file);
    }
}
