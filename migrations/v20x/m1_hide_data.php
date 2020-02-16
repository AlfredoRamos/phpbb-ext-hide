<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

namespace alfredoramos\hide\migrations\v20x;

use phpbb\db\migration\container_aware_migration;
use alfredoramos\hide\includes\helper as hide_helper;

class m1_hide_data extends container_aware_migration
{
	/** @var \alfredoramos\hide\includes\helper */
	protected $hide = null;

	/**
	 * Migration dependencies.
	 *
	 * @return array
	 */
	static public function depends_on()
	{
		return ['\alfredoramos\hide\migrations\v10x\m1_hide_data'];
	}

	/**
	 * Install BBCode in database.
	 *
	 * @return array
	 */
	public function update_data()
	{
		return [
			[
				'custom',
				[
					[$this->get_helper(), 'uninstall_bbcode']
				]
			]
		];
	}

	/**
	 * Hide helper.
	 *
	 * @return \alfredoramos\hide\includes\helper
	 */
	private function get_helper()
	{
		if (!isset($this->hide))
		{
			$this->hide = new hide_helper(
				$this->container->get('dbal.conn'),
				$this->container->get('filesystem'),
				$this->container->getParameter('core.root_path'),
				$this->container->getParameter('core.php_ext')
			);
		}

		return $this->hide;
	}
}