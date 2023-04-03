<?php

declare(strict_types=1);

namespace Behavioral\Memento;

final class UndoEditor
{
    /**
     * @var EditorSnapshot[]
     */
    private array $snapshots = [];

    public function __construct(private Editor $editor)
    {
    }

    public function edit(string $content): void
    {
        $this->snapshots[] = $this->editor->save();
        $this->editor->edit($content);
    }

    public function render(): string
    {
        return $this->editor->render();
    }

    public function undo(): void
    {
        $this->editor->restore(array_pop($this->snapshots));
    }
}
