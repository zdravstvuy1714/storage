<?php

namespace App\Builders\File;

use App\DataTransferObject\File\FileDTO;
use App\Enums\File\FileVisibilityEnum;

class FileDTOBuilder
{
    private string $original_name;
    private string $mime_type;
    private string $relative_path;
    private string $disk;
    private string $scope;
    private string $size;
    private FileVisibilityEnum $visibility;

    public function setFileSettings()
    {

    }

    public function set()
    {

    }

    public function build(): FileDTO
    {
        return new FileDTO(
            original_name: $this->original_name,
            mime_type: $this->mime_type,
            relative_path: $this->relative_path,
            disk: $this->disk,
            scope: $this->scope,
            size: $this->size,
            visibility: $this->visibility,
        );
    }
}
