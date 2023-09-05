<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport\TestModels;

use MongoDB\Laravel\Eloquent\Model;
use sedkiTN\MediaLibrary\HasMedia;
use sedkiTN\MediaLibrary\InteractsWithMedia;

class TestModelWithoutMediaConversions extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'test_models';
    protected $guarded = [];
    public $timestamps = false;
}
