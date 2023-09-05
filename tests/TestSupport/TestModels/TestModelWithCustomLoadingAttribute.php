<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport\TestModels;

use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class TestModelWithCustomLoadingAttribute extends TestModelWithConversion
{
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
