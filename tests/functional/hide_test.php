<?php

/**
 * Hide Extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0
 */

namespace alfredoramos\hide\tests\functional;

use phpbb_functional_test_case;

/**
 * @group functional
 */
class hide_test extends phpbb_functional_test_case
{
	public function setUp()
	{
		parent::setUp();
		$this->add_lang_ext('alfredoramos/hide', 'posting');
		$this->login();
	}

	static protected function setup_extensions()
	{
		return ['alfredoramos/hide'];
	}

	public function test_hide_bbcode()
	{
		$post = $this->create_topic(
			2,
			'Hide Functional Test 1',
			'[hide]Hidden text[/hide]'
		);

		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$post['topic_id'],
			$this->sid
		));

		$expected = '<section class="hidden-content">'.
						'<header><span>'.$this->lang('HIDDEN_CONTENT').'</span></header>'.
						'Hidden text'.
					'</section>';

		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$post['topic_id']
		));

		$this->assertSame(1, $result->count());
		$this->assertContains($expected, $result->html());
	}

	/**
	 * @depends test_hide_bbcode
	 */
	public function test_guest_hide_bbcode()
	{
		$this->logout();

		$topic_id = 2;

		$crawler = self::request('GET', sprintf(
			'viewtopic.php?t=%d&sid=%s',
			$topic_id,
			$this->sid
		));

		$expected = '<div class="hidden-content error">'.
						$this->lang('HIDDEN_CONTENT_EXPLAIN').
					'</div>';

		$result = $crawler->filter(sprintf(
			'#post_content%d .content',
			$topic_id
		));

		$this->assertContains($expected, $result->html());
	}
}
