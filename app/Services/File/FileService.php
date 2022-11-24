<?php

namespace App\Services\File;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;
use App\Enums\File\FileVisibilityEnum;
use App\Interfaces\FileServiceContract;

abstract class FileService
{
    abstract public function __construct(FileServiceContract $public, FileServiceContract $private);

    public function upload(UploadFileDTO $dto): UploadedFileDTO
    {
        return match ($dto->visibility) {
            FileVisibilityEnum::Public->value => $this->getPublicStorage()->upload($dto),
            FileVisibilityEnum::Private->value => $this->getPrivateStorage()->upload($dto),
        };
    }

    abstract public function getPublicStorage(): FileServiceContract;

    abstract public function getPrivateStorage(): FileServiceContract;
}
