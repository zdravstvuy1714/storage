<?php

namespace App\Services\File;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\Enums\File\FileVisibilityEnum;
use App\Interfaces\FileUploadingService;
use App\Services\File\Cloud\PrivateCloudFileUploadingService;
use App\Services\File\Cloud\PublicCloudFileUploadingService;
use Illuminate\Http\UploadedFile;

class CloudFileUploadingService implements FileUploadingService
{
    private PublicCloudFileUploadingService $publicFileUploadingService;

    private PrivateCloudFileUploadingService $privateFileUploadingService;

    public function __construct(
        PublicCloudFileUploadingService $publicFileUploadingService,
        PrivateCloudFileUploadingService $privateFileUploadingService,
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
