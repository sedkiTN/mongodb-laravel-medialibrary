<?php

namespace sedkiTN\MediaLibrary\Conversions\Events;

use Illuminate\Queue\SerializesModels;
use sedkiTN\MediaLibrary\Conversions\Conversion;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

class ConversionWillStart
{
    use SerializesModels;

    public function __construct(public Media $media, public Conversion $conversion, public string $copiedOriginalFile)
    {
    }
}
