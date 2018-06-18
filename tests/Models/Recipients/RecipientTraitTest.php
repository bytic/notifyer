<?php

namespace ByTIC\Notifier\Tests\Models\Recipients;

use ByTIC\Notifier\Models\Recipients\Types\Single;
use ByTIC\Notifier\Tests\AbstractTest;
use ByTIC\Notifier\Tests\Fixtures\Models\Events\Event;
use ByTIC\Notifier\Tests\Fixtures\Models\Recipients\Recipient;
use ByTIC\Notifier\Tests\Fixtures\Models\Recipients\Recipients;

use Mockery as m;

/**
 * Class RecipientTraitTest
 * @package ByTIC\Notifier\Tests\Models\Recipients
 */
class RecipientTraitTest extends AbstractTest
{
    public function testIsActive()
    {
        $recipient = new Recipient();
        self::assertFalse($recipient->isActive());
    }

//    public function testSend()
//    {
//        $recipient = new Recipient();
//
//        $type = m::mock(Single::class)
//            ->shouldReceive('sendEvent')->andReturn(1);
//
//        $recipients = m::mock(Recipients::class)
//            ->shouldReceive('getType')->andReturn($type);
//        $recipient->setManager($recipients);
//
//        $event = new Event();
//
//        $result = $recipient->sendEvent($event);
//        self::assertTrue($result);
//    }

//    public function testGenerateNotificationName()
//    {
//        $recipient = new Recipient();
//        $recipient->getRelation('Topic')->setResults()
//
//        $notificationName = $recipient->generateNotificationName();
//        self::assertSame('', $notificationName);
//    }
}
