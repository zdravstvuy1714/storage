<?php

namespace App\Services\File\Local;

use App\DataTransferObject\File\Uploading\UploadedFileDTO;
use App\DataTransferObject\File\Uploading\UploadFileDTO;
use App\Interfaces\FileServiceContract;
use Illuminate\Support\Facades\Storage;

class PublicLocalFileServiceContract implements FileServiceContract
{
    private string $disk = 'public';

    public function upload(UploadFileDTO $dto): UploadedFileDTO
    {
        $relative_path = Storage::disk($this->disk)->putFile(
            path: $dto->catalog,
            file: $dto->file,
        );

        return new UploadedFileDTO(
            relative_path: $relative_path,
            disk: $this->disk,
        );
    }
}
