<?php

namespace App\Models;

use App\Enums\File\FileVisibilityEnum;
use Carbon\CarbonImmutable;
use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Attributes.
 * @property int $id
 * @property string $original_name
 * @property string $relative_path
 * @property string $disk
 * @property string $scope
 * @property FileVisibilityEnum $visibility
 * @property DateTime $created_at
 * @property DateTime $updated_at
 *
 * Attributes [accessors].
 * @property string $absolute_path
 */
class File extends Model
{
    use HasFactory;

    protected $table = 'files';

    protected $casts = [
        'visibility' => FileVisibilityEnum::class,
    ];

    public function absolutePath(): Attribute
    {
        return Attribute::get(function () {
            return match ($this->visibility) {
                FileVisibilityEnum::Public => Storage::disk($this->disk)->url($this->relative_path),
                FileVisibilityEnum::Private => Storage::disk($this->disk)->temporaryUrl($this->relative_path, CarbonImmutable::now()->addMinute()),
            };
        });
    }
}
