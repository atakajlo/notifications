<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Notification;

class Notification implements NotificationInterface
{
    private string $subject;
    private string $template;
    private array $parameters;

    public function __construct(string $subject, string $template, array $parameters = [])
    {
        $this->subject = $subject;
        $this->template = $template;
        $this->parameters = $parameters;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}