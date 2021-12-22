<?php

namespace Vinecave\Bundle\CollectionBundle\Services;

class BufferService
{
    private array $buffer;

    public function get(string $name): mixed
    {
        return $this->buffer[$name] ?? null;
    }

    public function set(string $name, mixed $value): void
    {
        $this->buffer[$name] = $value;
    }

    public function has(string $name): bool
    {
        return isset($this->buffer[$name]);
    }
}
