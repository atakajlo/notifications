<?php

declare(strict_types=1);

namespace Atakajlo\Notifications;

use Atakajlo\Notifications\Notification\NotificationInterface;
use Atakajlo\Notifications\Notifier\NotifierInterface;
use Atakajlo\Notifications\Recipient\RecipientInterface;
use Atakajlo\Notifications\Renderer\RendererInterface;

class NotificationManager implements NotificationManagerInterface
{
    private NotifierInterface $notifier;
    private RendererInterface $renderer;

    public function __construct(NotifierInterface $notifier, RendererInterface $renderer)
    {
        $this->notifier = $notifier;
        $this->renderer = $renderer;
    }

    public function notify(RecipientInterface $recipient, NotificationInterface $notification): void
    {
        $renderedNotification = $this->renderer->render($notification);
        $this->notifier->notify($recipient->getTo(), $notification->getSubject(), $renderedNotification);
    }
}
