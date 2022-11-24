<?php

namespace App\Enums\File;

use App\Traits\Enum\ArrayableEnum;

enum FileVisibilityEnum: string
{
    use ArrayableEnum;

    case Public = 'public';
    case Private = 'private';
}
