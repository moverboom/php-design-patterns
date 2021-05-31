<?php

declare(strict_types=1);

namespace Patterns\Creational\FactoryMethod;

final class CSVDocument implements Document
{
    private $pointer;

    public function __construct()
    {
        $this->pointer = fopen('php://memory', 'w+');
    }

    public function write(string $line): void
    {
        $success = fputcsv($this->pointer, [$line]);

        if (!$success) {
            throw new \RuntimeException('Failed to write csv');
        }
    }

    public function read(): string
    {
        $rewound = rewind($this->pointer);

        if (!$rewound) {
            throw new \RuntimeException('Failed to rewind pointer');
        }

        $result = '';

        while (($line = fgetcsv($this->pointer)) !== false) {
            $result .= implode("", $line) . "\n";
        }

        return $result;
    }
}
