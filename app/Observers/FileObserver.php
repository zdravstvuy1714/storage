<?php

namespace App\Observers;

use App\Models\File;
use Illuminate\Contracts\Filesystem\Factory as FileStorage;

class FileObserver
{
    private FileStorage $storage;

    public function __construct(FileStorage $storage)
    {
        $this->storage = $storage;
    }

    public function deleted(File $file): void
    {
        $this
            ->storage
            ->disk($file->disk)
            ->delete($file->relative_path);
    }
}
