<?php

namespace App\Actions\File;

use App\DataTransferObject\File\Image\StoreImageFileDTO;
use App\Interfaces\FileUploadingService;
use App\Models\File;

class StoreImageFileAction
{
    private FileUploadingService $service;

    public function __construct(FileUploadingService $service)
    {
        $this->service = $service;
    }

    public function execute(StoreImageFileDTO $dto): File
    {
        $uploaded = $this->service->upload(
            visibility: $dto->visibility,
            catalog: config('uploads.images.catalog'),
            file: $dto->file,
        );

        $file = new File();
        $file->original_name = $dto->file->getClientOriginalName();
        $file->relative_path = $uploaded->relative_path;
        $file->disk = $uploaded->disk;
        $file->scope = config('uploads.images.scope');
        $file->visibility = $dto->visibility;
        $file->save();

        return $file;
    }
}
