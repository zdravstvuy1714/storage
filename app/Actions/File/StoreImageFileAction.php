<?php

namespace App\Actions\File;

class StoreImageFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.images.scope');
    }

    protected function getScope(): string
    {
        return config('uploads.images.scope');
    }
}
