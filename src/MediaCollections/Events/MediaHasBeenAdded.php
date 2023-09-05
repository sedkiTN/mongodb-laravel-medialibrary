<?php

namespace sedkiTN\MediaLibrary\MediaCollections\Events;

use Illuminate\Queue\SerializesModels;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class MediaHasBeenAdded
{
    use SerializesModels;

    public function __construct(public Media $media)
    {
    }
}
