<?php

namespace App\Http\Controllers\File;

use App\Actions\File\Scope\StoreAvatarFileAction;
use App\DataTransferObject\File\FIle\Avatar\StoreAvatarFileDTO;
use App\Transformers\File\FileTransformer;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UploadAvatarFile
{
    public function __invoke(StoreAvatarFileDTO $dto, StoreAvatarFileAction $action): JsonResponse
    {
        $file = $action->execute($dto);

        return fractal($file, new FileTransformer())->respond(Response::HTTP_CREATED);
    }
}
