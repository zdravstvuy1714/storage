<?php

namespace App\Actions\File;

class StoreAvatarFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.avatars.scope');
    }

    protected function getScope(): string
    {
        return config('uploads.avatars.scope');
    }
}
