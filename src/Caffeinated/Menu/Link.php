<?php
namespace Caffeinated\Menu;

class Link
{
	public $path = array();

	public $href;

	public $attributes = array();

	public function __construct($path = array())
	{
		$this->path = $path;
	}

	public function attr()
	{
		$args = func_get_args();

		if (isset($args[0]) and is_array($args[0])) {
			$this->attributes = array_merge($this->attributes, $args[0]);

			return $this;
		} elseif (isset($args[0]) and isset($args[1])) {
			$this->attributes[$args[0]] = $args[1];

			return $this;
		} elseif (isset($args[0])) {
			return isset($this->attributes[$args[0]]) ? $this->attributes[$args[0]] : null;
		}

		return $this->attributes;
	}
}