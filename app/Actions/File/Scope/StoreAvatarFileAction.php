<?php

namespace App\Actions\File\Scope;

use App\Actions\File\StoreFileAction;

class StoreAvatarFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.avatars.catalog');
    }

    protected function getScope(): string
    {
        return config('uploads.avatars.scope');
    }
}
