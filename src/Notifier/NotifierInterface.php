<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Notifier;

interface NotifierInterface
{
    public function notify(string $recipient, string $subject, string $body): void;
}
