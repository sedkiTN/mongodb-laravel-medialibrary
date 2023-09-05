<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport\TestModels;

use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class TestModelWithConversionUsingModelInstance extends TestModelWithConversion
{
    public $registerMediaConversionsUsingModelInstance = true;

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('lazy-conversion')
            ->useLoadingAttributeValue('lazy')
            ->nonQueued();

        $this
            ->addMediaConversion('eager-conversion')
            ->useLoadingAttributeValue('eager')
            ->nonQueued();
    }
}
