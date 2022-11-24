<?php

namespace App\Services\File\Local;

use App\Interfaces\FileServiceContract;
use App\Services\File\FileService;

class LocalFileService extends FileService
{
    private PublicLocalFileServiceContract $public;

    private PrivateLocalFileServiceContract $private;

    public function __construct(PublicLocalFileServiceContract $public, PrivateLocalFileServiceContract $private)
    {
        $this->public = $public;
        $this->private = $private;
    }

    public function getPublicStorage(): FileServiceContract
    {
        return $this->public;
    }

    public function getPrivateStorage(): FileServiceContract
    {
        return $this->private;
    }
}
