<?php

namespace App\Actions\File\Scope;

use App\Actions\File\StoreFileAction;

class StoreDocumentFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.documents.catalog');
    }

    protected function getScope(): string
    {
        return config('uploads.documents.scope');
    }
}
