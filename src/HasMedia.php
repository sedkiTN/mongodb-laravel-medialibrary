<?php

namespace sedkiTN\MediaLibrary;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;
use sedkiTN\MediaLibrary\Conversions\Conversion;
use sedkiTN\MediaLibrary\MediaCollections\FileAdder;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @mixin \MongoDB\Laravel\Eloquent\Model
 * @method void prepareToAttachMedia(Media $media, FileAdder $fileAdder)
 * @property bool $registerMediaConversionsUsingModelInstance
 * @property ?\sedkiTN\MediaLibrary\MediaCollections\MediaCollection $mediaCollections
 */
interface HasMedia
{
    public function media(): MorphMany;

    public function addMedia(string|UploadedFile $file): FileAdder;

    public function copyMedia(string|UploadedFile $file): FileAdder;

    public function hasMedia(string $collectionName = ''): bool;

    public function getMedia(string $collectionName = 'default', array|callable $filters = []): Collection;

    public function clearMediaCollection(string $collectionName = 'default'): HasMedia;

    public function clearMediaCollectionExcept(string $collectionName = 'default', array|Collection $excludedMedia = []): HasMedia;

    public function shouldDeletePreservingMedia(): bool;

    public function loadMedia(string $collectionName);

    public function addMediaConversion(string $name): Conversion;

    public function registerMediaConversions(Media $media = null): void;

    public function registerMediaCollections(): void;

    public function registerAllMediaConversions(): void;
}
