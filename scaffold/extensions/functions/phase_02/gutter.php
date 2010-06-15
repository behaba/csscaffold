<?php

/**
 * x number of gutter (left or right). Quicker way of doing calc($baseline * n)
 *
 * @param $side (left or right)
 * @param $num (operator, optional)
 * @return string
 */
function Scaffold_gutter($side,$num=1)
{
	if( isset(Layout::$grid_settings['baseline']) )
	{
		return (Layout::$grid_settings[$side.'_gutter_width'] * $num) . 'px ';
	}

	return false;
}