<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport\TestPathGenerators;

use sedkiTN\MediaLibrary\MediaCollections\Models\Media;
use sedkiTN\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;
use sedkiTN\MediaLibrary\Support\PathGenerator\PathGenerator;

class TestPathGeneratorConversionsInOriginalImageDirectory extends DefaultPathGenerator implements PathGenerator
{
    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media);
    }
}
