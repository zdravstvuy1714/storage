<?php

namespace App\Actions\File;

use App\DataTransferObject\File\StoreFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;
use App\Interfaces\FileUploadingService;
use App\Models\File;

abstract class StoreFileAction
{
    private FileUploadingService $service;

    public function __construct(FileUploadingService $service)
    {
        $this->service = $service;
    }

    abstract protected function getCatalog(): string;

    abstract protected function getScope(): string;

    public function execute(StoreFileDTO $dto): File
    {
        $uploaded = $this->service->upload(new UploadFileDTO(
            file: $dto->file,
            catalog: $this->getCatalog(),
            visibility: $dto->visibility,
        ));

        $file = new File();
        $file->original_name = $dto->file->getClientOriginalName();
        $file->relative_path = $uploaded->relative_path;
        $file->disk = $uploaded->disk;
        $file->scope = $this->getScope();
        $file->visibility = $dto->visibility;
        $file->save();

        return $file;
    }
}
