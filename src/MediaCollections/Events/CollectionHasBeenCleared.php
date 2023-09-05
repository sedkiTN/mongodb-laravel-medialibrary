<?php

namespace sedkiTN\MediaLibrary\MediaCollections\Events;

use Illuminate\Queue\SerializesModels;
use sedkiTN\MediaLibrary\HasMedia;

class CollectionHasBeenCleared
{
    use SerializesModels;

    public function __construct(public HasMedia $model, public string $collectionName)
    {
    }
}
