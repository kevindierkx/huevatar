<?php namespace Kevindierkx\Huevatar;

use Illuminate\Support\Facades\Facade;

class Huevatar extends Facade {

	/**
	 * {@inheritdoc}
	 */
	protected static function getFacadeAccessor() { return 'huevatar'; }

}
