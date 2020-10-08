<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Renderer;

use Atakajlo\Notifications\Notification\NotificationInterface;

interface RendererInterface
{
    public function render(NotificationInterface $notification): string;
}
