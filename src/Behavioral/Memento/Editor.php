<?php

declare(strict_types=1);

namespace Behavioral\Memento;

final class Editor
{
    private string $content = '';

    public function edit(string $content): void
    {
        $this->content .= $content;
    }

    public function render(): string
    {
        return $this->content;
    }

    public function save(): EditorSnapshot
    {
        return $this->snapshot();
    }

    private function snapshot(): EditorSnapshot
    {
        //Don't expose functions to fetch the state to other classes than the originator.
        return new class($this->content) implements EditorSnapshot {
            public function __construct(private string $content)
            {}

            public function state(): string
            {
                return $this->content;
            }
        };
    }

    public function restore(EditorSnapshot $snapshot): void
    {
        if (!method_exists($snapshot, 'state')) {
            throw new \RuntimeException('Invalid memento');
        }

        $this->content = $snapshot->state();
    }
}
