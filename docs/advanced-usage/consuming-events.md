---
title: Consuming events
weight: 8
---

The media library will fire the following events that your handlers can listen for:

### MediaHasBeenAdded
This event is fired after a file has been saved to disk.

The event has a property `media` that holds the `\sedkiTN\MediaLibrary\Models\Media`-object of which the file has been stored.

### ConversionWillStart
This event is fired right before a conversion will start.

The event has two public properties:

- `media`: the `\sedkiTN\MediaLibrary\Models\Media`-object of which a conversion will be started
- `conversion`: the conversion (an instance of `\sedkiTN\MediaLibrary\Conversion\Conversion`) that will start

### ConversionHasBeenCompleted
This event is fired when a conversion has been completed.

The event has two public properties:

- `media`: the `\sedkiTN\MediaLibrary\Models\Media`-object of which a conversion has been completed
- `conversion`: the conversion (an instance of `\sedkiTN\MediaLibrary\Conversion\Conversion`) that has just been completed

### CollectionHasBeenCleared
This event will be fired after a collection has been cleared.

The event has two public properties:

- `model`:  the object that conforms to `\sedkiTN\MediaLibrary\HasMedia\Interfaces\HasMedia` of which a collection has just been cleared.
- `collectionName`: the name of the collection that has just been cleared

## Sample usage

First you must create a listener class. Here's one that will log the paths of added media.

```php
namespace App\Listeners;

use Log;
use sedkiTN\MediaLibrary\MediaCollections\Events\MediaHasBeenAdded;

class MediaLogger
{
    public function handle(MediaHasBeenAdded $event)
    {
        $media = $event->media;
        $path = $media->getPath();
        Log::info("file {$path} has been saved for media {$media->id}");
    }
}
```

Hook it up in `app/Providers/EventServiceProvider.php` to let Laravel know that your handler should be called when the event is fired:

```php
protected $listen = [
    'sedkiTN\MediaLibrary\MediaCollections\Events\MediaHasBeenAdded' => [
        'App\Listeners\MediaLogger'
    ],
];
```
