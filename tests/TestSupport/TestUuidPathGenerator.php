<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport;

use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class TestUuidPathGenerator extends TestPathGenerator
{
    public function getPath(Media $media): string
    {
        return "{$media->uuid}/";
    }
}
