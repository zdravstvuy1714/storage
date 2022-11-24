<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\JsonResponse;

class DeleteFile
{
    public function __invoke(int $id): JsonResponse
    {
        return response()->json(['action' => 'destroy']);
    }
}
