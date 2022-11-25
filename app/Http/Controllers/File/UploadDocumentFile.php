<?php

namespace App\Http\Controllers\File;

use App\Actions\File\Scope\StoreDocumentFileAction;
use App\DataTransferObject\File\FIle\Document\StoreDocumentFileDTO;
use App\Transformers\File\FileTransformer;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UploadDocumentFile
{
    public function __invoke(StoreDocumentFileDTO $dto, StoreDocumentFileAction $action): JsonResponse
    {
        $file = $action->execute($dto);

        return fractal($file, new FileTransformer())->respond(Response::HTTP_CREATED);
    }
}
