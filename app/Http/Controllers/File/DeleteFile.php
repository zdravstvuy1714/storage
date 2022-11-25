<?php

namespace App\Http\Controllers\File;

use App\Actions\File\DeleteFileAction;
use Illuminate\Http\JsonResponse;

class DeleteFile
{
    public function __invoke(int $id, DeleteFileAction $action): JsonResponse
    {
        $action->execute($id);

        return response()->json();
    }
}
