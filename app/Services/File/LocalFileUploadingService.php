<?php

namespace App\Services\File;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\Enums\File\FileVisibilityEnum;
use App\Interfaces\FileUploadingService;
use App\Services\File\Local\PrivateLocalFileUploadingService;
use App\Services\File\Local\PublicLocalFileUploadingService;
use Illuminate\Http\UploadedFile;

class LocalFileUploadingService implements FileUploadingService
{
    private PublicLocalFileUploadingService $publicFileUploadingService;

    private PrivateLocalFileUploadingService $privateFileUploadingService;

    public function __construct(
        PublicLocalFileUploadingService $publicFileUploadingService,
        PrivateLocalFileUploadingService $privateFileUploadingService,
    ) {
        $this->publicFileUploadingService = $publicFileUploadingService;
        $this->privateFileUploadingService = $privateFileUploadingService;
    }

    public function upload(string $visibility, string $catalog, UploadedFile $file): UploadedFileDTO
    {
        return match ($visibility) {
            FileVisibilityEnum::Public->value => $this->publicFileUploadingService->upload($catalog, $file),
            FileVisibilityEnum::Private->value => $this->privateFileUploadingService->upload($catalog, $file),
        };
    }
}
