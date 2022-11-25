<?php

namespace App\Actions\File;

class StoreDocumentFileAction extends StoreFileAction
{
    protected function getCatalog(): string
    {
        return config('uploads.documents.scope');
    }

    protected function getScope(): string
    {
        return config('uploads.documents.scope');
    }
}
