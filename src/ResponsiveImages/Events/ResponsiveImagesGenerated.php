<?php

namespace sedkiTN\MediaLibrary\ResponsiveImages\Events;

use Illuminate\Queue\SerializesModels;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class ResponsiveImagesGenerated
{
    use SerializesModels;

    public function __construct(public Media $media)
    {
    }
}
