---
title: Preparing your model
weight: 1
---

To associate media with a model, the model must implement the following interface and trait:

```php
namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use sedkiTN\MediaLibrary\HasMedia;
use sedkiTN\MediaLibrary\InteractsWithMedia;

class YourModel extends Model implements HasMedia
{
    use InteractsWithMedia;
}
```

The `Collection` component will show a preview thumbnail for items in the collection it is showing.

To generate that thumbnail, you must add a conversion like this one to your model.

```php
use Spatie\Image\Manipulations;
use sedkiTN\MediaLibrary\MediaCollections\Models\Media;

public function registerMediaConversions(Media $media = null): void
{
    $this
        ->addMediaConversion('preview')
        ->fit(Manipulations::FIT_CROP, 300, 300)
        ->nonQueued();
}
```
