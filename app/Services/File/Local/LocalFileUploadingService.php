<?php

namespace App\Services\File\Local;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;
use App\Enums\File\FileVisibilityEnum;
use App\Interfaces\Services\File\FileUploadingService;

class LocalFileUploadingService implements FileUploadingService
{
    private PublicLocalFileUploadingService $publicService;

    private PrivateLocalFileUploadingService $privateService;

    public function __construct(
        PublicLocalFileUploadingService $publicService,
        PrivateLocalFileUploadingService $privateService,
    ) {
        $this->publicService = $publicService;
        $this->privateService = $privateService;
    }

    public function upload(UploadFileDTO $dto): UploadedFileDTO
    {
        return match ($dto->visibility) {
            FileVisibilityEnum::Public => $this
                ->publicService
                ->upload($dto->catalog, $dto->file),
            FileVisibilityEnum::Private => $this
                ->privateService
                ->upload($dto->catalog, $dto->file),
        };
    }
}
