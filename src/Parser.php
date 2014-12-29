<?php namespace Kevindierkx\Huevatar;

class Parser {

	/**
	 * @var array
	 */
	protected $colors;

	/**
	 * Bind color classes to class.
	 *
	 * @param  array  $colors
	 */
	public function __construct(array $colors)
	{
		$this->colors = $colors;
	}

	/**
	 * Get the color for the provided email.
	 *
	 * @param  string  $email
	 * @return string|null
	 */
	public function getColor($email)
	{
		$key = $this->parseKey($email);

		return array_get($this->colors, $key);
	}

	/**
	 * Parse key from email.
	 *
	 * @param  string  $email
	 * @return int
	 */
	protected function parseKey($email)
	{
		$hash         = md5($email);
		$filteredHash = $this->filterHash($hash);

		$colorCount = count($this->colors);

		$identifier = substr($filteredHash, 0, strlen($colorCount));

		return $identifier % $colorCount;
	}

	/**
	 * Filters all lowercase and uppercase characters,
	 * from the hash returning only the integers.
	 *
	 * @param  string  $hash
	 * @return string
	 */
	protected function filterHash($hash)
	{
		$map = range('a', 'z');

		return str_replace($map, null, strtolower($hash));
	}

}
