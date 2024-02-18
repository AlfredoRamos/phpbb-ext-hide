<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\hide\tests\event;

use phpbb_test_case;
use alfredoramos\hide\event\listener;
use alfredoramos\hide\includes\helper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @group event
 */
class listener_test extends phpbb_test_case
{
	/** @var \alfredoramos\hide\includes\helper */
	protected $helper;

	public function setUp(): void
	{
		parent::setUp();

		$this->helper = $this->getMockBuilder(helper::class)
			->disableOriginalConstructor()->getMock();
	}

	public function test_instance()
	{
		$this->assertInstanceOf(
			EventSubscriberInterface::class,
			new listener($this->helper)
		);
	}

	public function test_subscribed_events()
	{
		$this->assertSame(
			[
				'core.user_setup',
				'core.text_formatter_s9e_configure_after',
				'core.feed_modify_feed_row'
			],
			array_keys(listener::getSubscribedEvents())
		);
	}
}
