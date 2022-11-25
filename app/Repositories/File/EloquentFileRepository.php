<?php

namespace App\Repositories\File;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;

class EloquentFileRepository
{
    public function getFileByID(int $id): File|Model
    {
        return File::query()->findOrFail($id);
    }
}
