<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Notification;

interface NotificationInterface
{
    public function getSubject(): string;

    public function getTemplate(): string;

    public function getParameters(): array;
}
