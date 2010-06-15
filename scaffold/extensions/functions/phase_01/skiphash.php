<?php

/**
 * Skip the hash of a color
 *
 * @param $color
 * @return string
 */

function Scaffold_skiphash($color)
{
  return str_replace('#','',$color);
}