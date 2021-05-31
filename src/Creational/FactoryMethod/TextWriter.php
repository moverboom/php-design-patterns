<?php

declare(strict_types=1);

namespace Creational\FactoryMethod;

class TextWriter
{
    private Document $document;

    public function __construct()
    {
        $this->document = static::createDocument();
    }

    public function write(string $line): void
    {
        $this->document->write($line);
    }

    public function read(): string
    {
        return $this->document->read();
    }

    public static function createDocument(): Document
    {
        //This serves as as default implementation
        return new PlainTextDocument();
    }
}
