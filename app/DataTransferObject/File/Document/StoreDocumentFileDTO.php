<?php

namespace App\DataTransferObject\File\Document;

use App\DataTransferObject\File\StoreFileDTO;
use Illuminate\Validation\Rules\File;

class StoreDocumentFileDTO extends StoreFileDTO
{
    static protected function getFileRules(): array
    {
        return [
            File::types(['jpg,png,txt,pdf,docx,pptx,xlsx'])->max(5 * 1024),
        ];
    }
}
