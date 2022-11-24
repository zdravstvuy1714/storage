<?php

namespace App\DataTransferObject\File\Image;

use App\DataTransferObject\File\StoreFileDTO;
use Illuminate\Validation\Rules\File;

class StoreImageFileDTO extends StoreFileDTO
{
    public static function rules(): array
    {
        return [
            'file' => [
                'required',
                File::image()->max(5 * 1024),
            ],
        ];
    }
}
