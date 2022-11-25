<?php

namespace App\Http\Controllers\File;

use App\Actions\File\Scope\StoreImageFileAction;
use App\DataTransferObject\File\FIle\Image\StoreImageFileDTO;
use App\Transformers\File\FileTransformer;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UploadImageFile
{
    public function __invoke(StoreImageFileDTO $dto, StoreImageFileAction $action): JsonResponse
    {
        $file = $action->execute($dto);

        return fractal($file, new FileTransformer())->respond(Response::HTTP_CREATED);
    }
}
