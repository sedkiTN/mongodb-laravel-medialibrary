<?php

namespace sedkiTN\MediaLibrary\MediaCollections\Exceptions;

use sedkiTN\MediaLibrary\HasMedia;
use sedkiTN\MediaLibrary\MediaCollections\File;
use sedkiTN\MediaLibrary\MediaCollections\MediaCollection;

class FileUnacceptableForCollection extends FileCannotBeAdded
{
    public static function create(File $file, MediaCollection $mediaCollection, HasMedia $hasMedia): self
    {
        $modelType = $hasMedia::class;

        return new static("The file with properties `{$file}` was not accepted into the collection named `{$mediaCollection->name}` of model `{$modelType}` with id `{$hasMedia->getKey()}`");
    }
}
