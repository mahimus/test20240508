<?php

namespace test20240508\apps;

use test20240508\modules\interfaces\QueueInterface;

class EventApp
{
    //@todo Move to config file
    private const QUEUE_COUNT = 10;

    private QueueInterface $queue;

    public function __construct(QueueInterface $queue)
    {
        $this->queue = $queue;
    }

    public function processEvent(int $userId, array $payload): bool
    {
        $queueName = $this->getQueueName($userId);

        return $this->queue->send($queueName, [
            'userId' => $userId,
            'payload' => $payload,
        ]);
    }

    public function receiveEvents(string $queueName): void
    {
        for (;;) {
            $task = $this->queue->receive($queueName);
            if ($this->handleEvent($task)) {
                $this->queue->acknowledge($queueName, $task);
            }
        }
    }

    private function handleEvent(array $task): bool
    {
        sleep(1);

        return true;
    }

    private function getQueueName(int $userId): string
    {
        return sprintf('events_%s', $userId % self::QUEUE_COUNT);
    }
}