<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Recipient;

interface RecipientInterface
{
    public function getTo(): ?string;
}