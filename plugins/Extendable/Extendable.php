<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Extendable
 *
 * You can extend one selector from another by using extend:'selectorname';
 * 
 * @author Anthony Short
 */
class Extendable extends Plugins
{
	/**
	 * Process
	 *
	 * @author Anthony
	 * @return null
	 */
	public static function process()
	{
		# Find all selectors with the property 'extends'.
		if($found = CSS::find_selectors_with_property('extends'))
		{
			foreach(array_unique($found[3]) as $key => $value)
			{						
				# The selector we're going to find
				$find = preg_quote(trim(unquote($value)));
				
				# The extends:; property
				$property = $found[2][$key];
				
				# Find the selector we want to extend and replace it
				if($base = CSS::find_selectors($find))
				{
					CSS::replace($property, implode('', $base['properties']));
				}
				elseif($base = CSS::find_selectors($find,2))
				{
					CSS::replace($property, implode('', $base['properties']));
				}
			} 
		}
	}
}