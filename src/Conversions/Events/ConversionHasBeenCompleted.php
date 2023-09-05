<?php

namespace sedkiTN\MediaLibrary\Conversions\Events;

use Illuminate\Queue\SerializesModels;
use sedkiTN\MediaLibrary\Conversions\Conversion;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class ConversionHasBeenCompleted
{
    use SerializesModels;

    public function __construct(public Media $media, public Conversion $conversion)
    {
    }
}
