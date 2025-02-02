<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport\TestModels;

use Spatie\Image\Manipulations;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class TestModelWithPreviewConversion extends TestModel
{
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
