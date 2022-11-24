<?php

namespace App\Transformers\File;

use App\Models\File;
use League\Fractal\TransformerAbstract;

class FileTransformer extends TransformerAbstract
{
    public function transform(File $file): array
    {
        return [
            'id' => $file->id,
            'absolute_path' => $file->absolute_path,
            'relative_path' => $file->relative_path,
        ];
    }
}
