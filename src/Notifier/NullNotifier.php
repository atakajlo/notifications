<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Notifier;

class NullNotifier implements NotifierInterface
{
    private array $notifications = [];

    public function notify(string $recipient, string $subject, string $body): void
    {
        $this->notifications[$recipient][$subject] = $body;
    }

    public function getNotifications(): array
    {
        return $this->notifications;
    }
}