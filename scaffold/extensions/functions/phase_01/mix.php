<?php
/**
* Convert RGB Color to Hexadecimal color
* Example: Scaffold_rgbtohex(array(255,255,255)) => #FFFFFF
*
* @param $rgb array
* @return $hex string (hexadecimal format)
*/
function Scaffold_rgbtohex($rgb) {
	$hex = "";
	for($i=0; $i < 3; $i++) {

		// Convert the decimal digit to hex
		$hexDigit = dechex($rgb[$i]);

		// Add a leading zero if necessary
		if(strlen($hexDigit) == 1) {
			$hexDigit = "0" . $hexDigit;
		}

		// Append to the hex string
		$hex .= $hexDigit;
	}
	// Return the complete hex string
	return '#'.$hex;
}

/**
* Darken of lighten a hexadecimal color
* Example: Scaffold_mix(#FFFFFF,0.60,0) => #999
*
* @param $hex string (hexadecimal format)
* @param $percent int (percent)
* @param $mask int (0-255)
* @return $hex string (hexadecimal format)
*/
function Scaffold_mix($hex, $percent, $mask) {
	$rgb = Scaffold_hextorgb($hex);
	if (preg_match('#rgb\((.*)\)#',$rgb, $rgb_values)) {
	  $rgb=explode(',',trim($rgb_values[1]));
	}
	for ($i=0; $i<3; $i++) {
		$rgb[$i] = round($rgb[$i] * $percent) + round($mask * (1-$percent));
		// In case rounding up causes us to go to 256
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	return Scaffold_rgbtohex($rgb);
}
