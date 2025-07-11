<?php

namespace Rupadana\FilamentSwiper\Infolists\Components\Concerns;

trait HasScrollbar
{
    protected bool $scrollbar = false;

    protected bool $scrollbarDraggable = false;

    protected bool $scrollbarHide = false;

    protected bool $scrollbarSnapOnRelease = false;

    protected int $scrollbarDragSize = 100;

    public function getScrollbar(): bool
    {
        return $this->scrollbar;
    }

    public function scrollbar(bool $scrollbar = true)
    {
        $this->scrollbar = $scrollbar;

        return $this;
    }

    public function getScrollbarDraggable(): bool
    {
        return $this->scrollbarDraggable;
    }

    public function scrollbarDraggable(bool $scrollbarDraggable = true)
    {
        $this->scrollbarDraggable = $scrollbarDraggable;

        return $this;
    }

    public function getScrollbarHide(): bool
    {
        return $this->scrollbarHide;
    }

    public function scrollbarHide(bool $scrollbarHide = true)
    {
        $this->scrollbarHide = $scrollbarHide;

        return $this;
    }

    public function getScrollbarSnapOnRelease(): bool
    {
        return $this->scrollbarSnapOnRelease;
    }

    public function scrollbarSnapOnRelease(bool $scrollbarSnapOnRelease = true)
    {
        $this->scrollbarSnapOnRelease = $scrollbarSnapOnRelease;

        return $this;
    }

    public function getScrollbarDragSize(): int
    {
        return $this->scrollbarDragSize;
    }

    public function scrollbarDragSize(int $scrollbarDragSize)
    {
        $this->scrollbarDragSize = $scrollbarDragSize;

        return $this;
    }
}
