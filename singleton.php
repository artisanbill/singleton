<?php namespace Boone\Outshine\Support\Traits;

/**
 *	Class Singleton
 *
 *	@link			http://outshine.boone.ren
 *	@author			Boone <ililianjin@iCloud.com>
 *	@author			Outshine Development Team <outshine@boone.ren>
 *	@version		1.0.0
 *	@package		\Boone\Outshine\Support\Traits\Singleton
 */
trait Singleton
{
	/**
	 *	This is to a certain instance.
	 *
	 *	@var		null
	 */
	protected static $instance = NULL;

	/**
	 *	Create this object instance， Used extensively for single-case model.
	 *
	 *	@param		mixed		$argument
	 *	@return		$this
	 */
	public static function getInstance(...$argument)
	{
		if ( static::$instance === NULL )
		{
			static::$instance = new static(...$argument);
		}
		return static::$instance;
	}

	/**
	 *	Resets the singleton instance.
	 */
	public static function reset()
	{
		static::$instance = NULL;
	}
}
