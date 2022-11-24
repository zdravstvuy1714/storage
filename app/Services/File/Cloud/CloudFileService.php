<?php

namespace App\Services\File\Cloud;

use App\Interfaces\FileServiceContract;
use App\Services\File\FileService;

class CloudFileService extends FileService
{
    private PublicCloudFileServiceContract $public;

    private PrivateCloudFileServiceContract $private;

    public function __construct(PublicCloudFileServiceContract $public, PrivateCloudFileServiceContract $private)
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
