<?php

namespace test20240508\modules\interfaces;

interface QueueInterface
{
    public function send(string $name, array $task): bool;

    public function receive(string $name): array;

    public function acknowledge(string $name, array $task): bool;
}