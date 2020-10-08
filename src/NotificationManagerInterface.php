<?php

declare(strict_types=1);

namespace Atakajlo\Notifications;

use Atakajlo\Notifications\Notification\NotificationInterface;
use Atakajlo\Notifications\Recipient\RecipientInterface;

interface NotificationManagerInterface
{
    public function notify(RecipientInterface $recipient, NotificationInterface $notification): void;
}