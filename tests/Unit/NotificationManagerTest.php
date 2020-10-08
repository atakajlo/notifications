<?php

declare(strict_types=1);

namespace Atakajlo\Notifications\Tests\Unit;

use Atakajlo\Notifications\Notification\Notification;
use Atakajlo\Notifications\NotificationManager;
use Atakajlo\Notifications\Notifier\NullNotifier;
use Atakajlo\Notifications\Recipient\Recipient;
use Atakajlo\Notifications\Renderer\SimpleRenderer;
use PHPUnit\Framework\TestCase;

class NotificationManagerTest extends TestCase
{
    public function testNotify()
    {
        $notifier = new NullNotifier();
        $renderer = new SimpleRenderer();
        $manager = new NotificationManager($notifier, $renderer);

        $notification = new Notification(
            'subject',
            'employee %name% is %position%',
            [
                'name' => 'John Doe',
                'position' => 'CEO',
            ]
        );

        $recipient = new Recipient('john.doe@example.com');

        $manager->notify($recipient, $notification);

        $notifications = $notifier->getNotifications();
        self::assertArrayHasKey($recipient->getTo(), $notifications);
        self::assertEquals('employee John Doe is CEO', $notifications[$recipient->getTo()]['subject']);
    }
}