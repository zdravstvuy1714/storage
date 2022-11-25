<?php

namespace App\DataTransferObject\File\FIle\Avatar;

use App\DataTransferObject\File\FIle\StoreFileDTO;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class StoreAvatarFileDTO extends StoreFileDTO
{
    static protected function getFileRules(): array
    {
        return [
            File::image()
                ->max(1024)
                ->dimensions(Rule::dimensions()
                    ->maxWidth(512)
                    ->maxHeight(512)
                ),
        ];
    }
}
