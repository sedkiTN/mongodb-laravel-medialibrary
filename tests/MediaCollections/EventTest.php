<?php

use Illuminate\Support\Facades\Event;
use sedkiTN\MediaLibrary\MediaCollections\Events\MediaHasBeenAdded;

it('will fire the media added event', function () {
    Event::fake();

    $this->testModel->addMedia($this->getTestJpg())->toMediaCollection();

    Event::assertDispatched(MediaHasBeenAdded::class);
});
