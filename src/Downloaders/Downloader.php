<?php

namespace sedkiTN\MediaLibrary\Downloaders;

interface Downloader
{
    public function getTempFile(string $url): string;
}
