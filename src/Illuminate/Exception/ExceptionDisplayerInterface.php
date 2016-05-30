<?php namespace Illuminate\Exception;

use Throwable;

interface ExceptionDisplayerInterface {

	/**
	 * Display the given exception to the user.
	 *
	 * @param  \Exception  $exception
	 */
	public function display(Throwable $exception);

}
