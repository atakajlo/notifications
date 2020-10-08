<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Recipient;

class Recipient implements RecipientInterface
{
    private string $to;

    public function __construct(string $to)
    {
        $this->to = $to;
    }

    public function getTo(): string
    {
        return $this->to;
    }
}