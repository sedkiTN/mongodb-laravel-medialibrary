<?php

namespace sedkiTN\MediaLibrary\Support;

use sedkiTN\MediaLibrary\MediaCollections\Exceptions\FunctionalityNotAvailable;
use Spatie\MediaLibraryPro\Models\TemporaryUpload;

class MediaLibraryPro
{
    public static function ensureInstalled(): void
    {
        if (! self::isInstalled()) {
            throw FunctionalityNotAvailable::mediaLibraryProRequired();
        }
    }

    public static function isInstalled(): bool
    {
        return class_exists(TemporaryUpload::class);
    }
}
