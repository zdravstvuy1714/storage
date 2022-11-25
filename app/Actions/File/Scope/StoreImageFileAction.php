<?php

namespace App\Actions\File\Scope;

use App\Actions\File\StoreFileAction;

class StoreImageFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.images.catalog');
    }

    protected function getScope(): string
    {
        return config('uploads.images.scope');
    }
}
