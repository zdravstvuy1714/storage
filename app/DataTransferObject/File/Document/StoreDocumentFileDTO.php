<?php

namespace App\DataTransferObject\File\Document;

use App\DataTransferObject\File\StoreFileDTO;
use Illuminate\Validation\Rules\File;

class StoreDocumentFileDTO extends StoreFileDTO
{
    public static function rules(): array
    {
        return [
            'file' => [
                'required',
                File::types(['zip,csv,doc,docx,gif,jpe,jpeg,jpg,json,log,pdf,png,ppt,pptx,saz,txt,xls,xlsx,xml'])->max(5 * 1024),
            ],
        ];
    }
}
