<?php

namespace commands;

use test20240508\apps\EventApp;

class EventCommand
{
    private EventApp $eventApp;

    public function __construct(EventApp $eventApp)
    {
        $this->eventApp = $eventApp;
    }

    public function handle(string $queueName): void
    {
        $this->eventApp->receiveEvents($queueName);
    }
}