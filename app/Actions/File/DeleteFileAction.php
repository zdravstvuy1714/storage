<?php

namespace App\Actions\File;

use App\Repositories\File\EloquentFileRepository;

class DeleteFileAction
{
    private EloquentFileRepository $repository;

    public function __construct(EloquentFileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(int $id): void
    {
        $file = $this->repository->getFileByID($id);

        $file->delete();
    }
}
