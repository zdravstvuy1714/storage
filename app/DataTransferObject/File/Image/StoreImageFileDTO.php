<?php

namespace App\DataTransferObject\File\Image;

use App\DataTransferObject\File\StoreFileDTO;
use Illuminate\Validation\Rules\File;

class StoreImageFileDTO extends StoreFileDTO
{
    static protected function getFileRules(): array
    {
        return [
            File::image()->max(5 * 1024),
        ];
    }
}
