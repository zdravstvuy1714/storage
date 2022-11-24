<?php

namespace App\DataTransferObject\File\Avatar;

use App\DataTransferObject\File\StoreFileDTO;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class StoreAvatarFileDTO extends StoreFileDTO
{
    public static function rules(): array
    {
        return [
            'file' => [
                'required',
                File::image()
                    ->max(1024)
                    ->dimensions(Rule::dimensions()
                        ->maxWidth(512)
                        ->maxHeight(512)
                    ),
            ],
        ];
    }
}
