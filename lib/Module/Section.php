<?php
/**
 * Section Routes
 */

namespace App\Module;

class Section extends \OpenTHC\Module\Base
{
	function __invoke($a)
	{
		$a->get('', 'App\Controller\Section\Search');
		$a->post('', 'App\Controller\Section\Create');

		$a->get('/{id}', 'App\Controller\Section\Single');
		$a->post('/{id}', 'App\Controller\Section\Update');

		$a->delete('/{id}', 'App\Controller\Section\Delete');
	}
}
