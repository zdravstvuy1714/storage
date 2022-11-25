<?php

namespace App\DataTransferObject\File\FIle\Document;

use App\DataTransferObject\File\FIle\StoreFileDTO;
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
