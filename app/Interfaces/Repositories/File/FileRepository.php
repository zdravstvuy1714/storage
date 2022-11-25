<?php

namespace App\Interfaces\Repositories\File;

interface FileRepository
{
    public function getFileByID(int $id): mixed;
}
