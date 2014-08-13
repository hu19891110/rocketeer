<?php
/*
 * This file is part of Rocketeer
 *
 * (c) Maxime Fabre <ehtnam6@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Rocketeer\Tasks;

use Rocketeer\Abstracts\AbstractTask;

/**
 * Run the tests on the server and displays the output
 *
 * @author Maxime Fabre <ehtnam6@gmail.com>
 */
class Test extends AbstractTask
{
	/**
	 * A description of what the task does
	 *
	 * @var string
	 */
	protected $description = 'Run the tests on the server and displays the output';

	/**
	 * Run the task
	 *
	 * @return boolean
	 */
	public function execute()
	{
		return $this->getStrategy('Test')->test();
	}
}
