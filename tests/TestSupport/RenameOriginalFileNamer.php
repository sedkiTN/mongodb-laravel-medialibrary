<?php

namespace sedkiTN\MediaLibrary\Tests\TestSupport;

use sedkiTN\MediaLibrary\Conversions\Conversion;
use sedkiTN\MediaLibrary\Support\FileNamer\FileNamer;

class RenameOriginalFileNamer extends FileNamer
{
    public function originalFileName(string $fileName): string
    {
        return 'renamed_original_file';
    }

    public function responsiveFileName(string $fileName): string
    {
        $fileName = pathinfo($fileName, PATHINFO_FILENAME);

        return "prefix_{$fileName}_suffix";
    }

    public function conversionFileName(string $fileName, Conversion $conversion): string
    {
        $fileName = pathinfo($fileName, PATHINFO_FILENAME);

        return "prefix_{$fileName}_suffix---{$conversion->getName()}";
    }
}
