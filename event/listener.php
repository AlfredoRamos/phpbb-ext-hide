<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@proton.me>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\hide\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use alfredoramos\hide\includes\helper;

class listener implements EventSubscriberInterface
{
	/** @var helper */
	protected $helper;

	/**
	 * Listener constructor.
	 *
	 * @param helper $helper
	 *
	 * @return void
	 */
	public function __construct(helper $helper)
	{
		$this->helper = $helper;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core.
	 *
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return [
			'core.user_setup' => 'user_setup',
			'core.text_formatter_s9e_configure_after' => 'configure_hide',
			'core.feed_modify_feed_row' => 'clean_feed'
		];
	}

	/**
	 * Load language files and modify user data on every page.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function user_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name'	=> 'alfredoramos/hide',
			'lang_set'	=> 'posting'
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Add BBCode.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function configure_hide($event)
	{
		$configurator = $event['configurator'];
		$hide = $this->helper->bbcode_data();

		if (empty($hide))
		{
			return;
		}

		// Remove previous definitions
		unset(
			$configurator->BBCodes[$hide['bbcode_tag']],
			$configurator->tags[$hide['bbcode_tag']]
		);

		// Create HIDE BBCode
		$configurator->BBCodes->addCustom(
			$hide['bbcode_match'],
			$hide['bbcode_tpl']
		);
	}

	/**
	 * Remove BBCode from feeds.
	 *
	 * @param object $event
	 *
	 * @return void
	 */
	public function clean_feed($event)
	{
		$event['row'] = array_merge($event['row'], [
			$event['feed']->get('text') => $this->helper->remove_feed_bbcode(
				$event['row'][$event['feed']->get('text')]
			)
		]);
	}
}
