<?php

namespace App\Services\File\Cloud;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;
use App\Interfaces\FileServiceContract;
use Illuminate\Filesystem\FilesystemManager;

class PublicCloudFileServiceContract implements FileServiceContract
{
    private string $disk = 's3_public';

    public function __construct(FilesystemManager $storage)
    {
        $this->storage = $storage;
    }

    public function upload(UploadFileDTO $dto): UploadedFileDTO
    {
        $relative_path = $this->storage->putFile(
            path: $dto->catalog,
            file: $dto->file,
        );

        return new UploadedFileDTO(
            relative_path: $relative_path,
            disk: $this->disk,
        );
    }
}
