<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod;

final class CSVWriter extends TextWriter
{
    public static function createDocument(): Document
    {
        return new CSVDocument();
    }
}
