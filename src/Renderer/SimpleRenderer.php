<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Renderer;

use Atakajlo\Notifications\Notification\NotificationInterface;

/**
 * Renders template where variables looks like %variable%
 *
 * @example Your invoice with total %total% UAH
 */
final class SimpleRenderer implements RendererInterface
{
    public function render(NotificationInterface $notification): string
    {
        if ([] === $notification->getParameters()) {
            return $notification->getTemplate();
        }

        return $this->renderTemplate($notification);
    }

    private function renderTemplate(NotificationInterface $notification)
    {
        $parameters = $notification->getParameters();
        $keys = array_map(fn(string $key) => sprintf('%%%s%%', $key), array_keys($parameters));
        $values = array_values($parameters);

        return str_replace($keys, $values, $notification->getTemplate());
    }
}