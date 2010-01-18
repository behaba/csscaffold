<?php

/**
 * ColorReplace class
 *
 * @author Olivier Gorzalka
 * @dependencies None
 **/


class ColorReplace extends Scaffold_Module  {
	
	/* Invalid W3C color names and RGB equivalent */
	public static $colorsname = array(
		'aliceblue'=> 'rgb(240,248,255)',
		'antiquewhite'=> 'rgb(250,235,215)',
		'aquamarine'=> 'rgb(127,255,212)',
		'azure'=> 'rgb(240,255,255)',
		'beige'=> 'rgb(245,245,220)',
		'bisque'=> 'rgb(255,228,196)',
		'blanchedalmond'=> 'rgb(255,235,205)',
		'blueviolet'=> 'rgb(138,43,226)',
		'brown'=> 'rgb(165,42,42)',
		'burlywood'=> 'rgb(222,184,135)',
		'cadetblue'=> 'rgb(95,158,160)',
		'chartreuse'=> 'rgb(127,255,0)',
		'chocolate'=> 'rgb(210,105,30)',
		'coral'=> 'rgb(255,127,80)',
		'cornflowerblue'=> 'rgb(100,149,237)',
		'cornsilk'=> 'rgb(255,248,220)',
		'crimson'=> 'rgb(220,20,60)',
		'cyan'=> 'rgb(0,255,255)',
		'darkblue'=> 'rgb(0,0,139)',
		'darkcyan'=> 'rgb(0,139,139)',
		'darkgoldenrod'=> 'rgb(184,134,11)',
		'darkgray'=> 'rgb(169,169,169)',
		'darkgreen'=> 'rgb(0,100,0)',
		'darkkhaki'=> 'rgb(189,183,107)',
		'darkmagenta'=> 'rgb(139,0,139)',
		'darkolivegreen'=> 'rgb(85,107,47)',
		'darkorange'=> 'rgb(255,140,0)',
		'darkorchid'=> 'rgb(153,50,204)',
		'darkred'=> 'rgb(139,0,0)',
		'darksalmon'=> 'rgb(233,150,122)',
		'darkseagreen'=> 'rgb(143,188,143)',
		'darkslateblue'=> 'rgb(72,61,139)',
		'darkslategray'=> 'rgb(47,79,79)',
		'darkturquoise'=> 'rgb(0,206,209)',
		'darkviolet'=> 'rgb(148,0,211)',
		'deeppink'=> 'rgb(255,20,147)',
		'deepskyblue'=> 'rgb(0,191,255)',
		'dimgray'=> 'rgb(105,105,105)',
		'dodgerblue'=> 'rgb(30,144,255)',
		'firebrick'=> 'rgb(178,34,34)',
		'floralwhite'=> 'rgb(255,250,240)',
		'forestgreen'=> 'rgb(34,139,34)',
		'gainsboro'=> 'rgb(220,220,220)',
		'ghostwhite'=> 'rgb(248,248,255)',
		'gold'=> 'rgb(255,215,0)',
		'goldenrod'=> 'rgb(218,165,32)',
		'greenyellow'=> 'rgb(173,255,47)',
		'honeydew'=> 'rgb(240,255,240)',
		'hotpink'=> 'rgb(255,105,180)',
		'indianred '=> 'rgb(205,92,92)',
		'indigo '=> 'rgb(75,0,130)',
		'ivory'=> 'rgb(255,255,240)',
		'khaki'=> 'rgb(240,230,140)',
		'lavender'=> 'rgb(230,230,250)',
		'lavenderblush'=> 'rgb(255,240,245)',
		'lawngreen'=> 'rgb(124,252,0)',
		'lemonchiffon'=> 'rgb(255,250,205)',
		'lightblue'=> 'rgb(173,216,230)',
		'lightcoral'=> 'rgb(240,128,128)',
		'lightcyan'=> 'rgb(224,255,255)',
		'lightgoldenrodyellow'=> 'rgb(250,250,210)',
		'lightgrey'=> 'rgb(211,211,211)',
		'lightgreen'=> 'rgb(144,238,144)',
		'lightpink'=> 'rgb(255,182,193)',
		'lightsalmon'=> 'rgb(255,160,122)',
		'lightseagreen'=> 'rgb(32,178,170)',
		'lightskyblue'=> 'rgb(135,206,250)',
		'lightslategray'=> 'rgb(119,136,153)',
		'lightsteelblue'=> 'rgb(176,196,222)',
		'lightyellow'=> 'rgb(255,255,224)',
		'limegreen'=> 'rgb(50,205,50)',
		'linen'=> 'rgb(250,240,230)',
		'magenta'=> 'rgb(255,0,255)',
		'mediumaquamarine'=> 'rgb(102,205,170)',
		'mediumblue'=> 'rgb(0,0,205)',
		'mediumorchid'=> 'rgb(186,85,211)',
		'mediumpurple'=> 'rgb(147,112,216)',
		'mediumseagreen'=> 'rgb(60,179,113)',
		'mediumslateblue'=> 'rgb(123,104,238)',
		'mediumspringgreen'=> 'rgb(0,250,154)',
		'mediumturquoise'=> 'rgb(72,209,204)',
		'mediumvioletred'=> 'rgb(199,21,133)',
		'midnightblue'=> 'rgb(25,25,112)',
		'mintcream'=> 'rgb(245,255,250)',
		'mistyrose'=> 'rgb(255,228,225)',
		'moccasin'=> 'rgb(255,228,181)',
		'navajowhite'=> 'rgb(255,222,173)',
		'oldlace'=> 'rgb(253,245,230)',
		'olivedrab'=> 'rgb(107,142,35)',
		'orange'=> 'rgb(255,165,0)',
		'orangered'=> 'rgb(255,69,0)',
		'orchid'=> 'rgb(218,112,214)',
		'palegoldenrod'=> 'rgb(238,232,170)',
		'palegreen'=> 'rgb(152,251,152)',
		'paleturquoise'=> 'rgb(175,238,238)',
		'palevioletred'=> 'rgb(216,112,147)',
		'papayawhip'=> 'rgb(255,239,213)',
		'peachpuff'=> 'rgb(255,218,185)',
		'peru'=> 'rgb(205,133,63)',
		'pink'=> 'rgb(255,192,203)',
		'plum'=> 'rgb(221,160,221)',
		'powderblue'=> 'rgb(176,224,230)',
		'rosybrown'=> 'rgb(188,143,143)',
		'royalblue'=> 'rgb(65,105,225)',
		'saddlebrown'=> 'rgb(139,69,19)',
		'salmon'=> 'rgb(250,128,114)',
		'sandybrown'=> 'rgb(244,164,96)',
		'seagreen'=> 'rgb(46,139,87)',
		'seashell'=> 'rgb(255,245,238)',
		'shit' => 'rgb(90,55,16)',
		'sienna'=> 'rgb(160,82,45)',
		'skyblue'=> 'rgb(135,206,235)',
		'slateblue'=> 'rgb(106,90,205)',
		'slategray'=> 'rgb(112,128,144)',
		'snow'=> 'rgb(255,250,250)',
		'springgreen'=> 'rgb(0,255,127)',
		'steelblue'=> 'rgb(70,130,180)',
		'tan'=> 'rgb(210,180,140)',
		'thistle'=> 'rgb(216,191,216)',
		'tomato'=> 'rgb(255,99,71)',
		'turquoise'=> 'rgb(64,224,208)',
		'violet'=> 'rgb(238,130,238)',
		'wheat'=> 'rgb(245,222,179)',
		'whitesmoke'=> 'rgb(245,245,245)',
		'yellowgreen'=> 'rgb(154,205,50)'
	);

	/**
	* Converts cmyk colors to rgb colors
	* Example: _cmyk_to_rgb(87,83,20,10) => array(30, 39, 184)
	*
	* @param $c Cyan (percentage)
	* @param $m Magenta (percentage)
	* @param $y Yellow (percentage)
	* @param $k Key or black (percentage)
	* @return $rgb array of rgb colors
	*/
	public static function _cmyk_to_rgb($c, $m, $y, $k) {
		$c = intval($c) / 100;
		$m = intval($m) / 100;
		$y = intval($y) / 100;
		$k = intval($k) / 100;
		
		$r = intval((1-min(1,$c*(1-$k)+$k))*255+0.5);
		$g = intval((1-min(1, $m * (1 - $k) + $k))*255+0.5);
		$b = intval((1-min(1, $y * (1 - $k) + $k))*255+0.5);

		return array($r,$g,$b);
	}

	/**
	* Converts hsl colors to rgb colors
	* Example: _hsl_to_rgb(20, 80, 50) => array(128, 60, 26)
	*
	* @param $h Hue (in degrees)
	* @param $s Saturation (percentage)
	* @param $l Light (percentage)
	* @return $rgb array of rgb colors
	*/
	public static function _hsl_to_rgb($h,$s,$l) {
		$h = intval($h)/360;
		$s = intval($s)/100;
		$l = intval($l)/100;

		$rgb = array();
		if ($s == 0) {
		  $r = $g = $b = $l * 255;
		} else {
			$var_h = $h * 6;
			$var_i = floor( $var_h );
			$var_1 = $l * ( 1 - $s );
			$var_2 = $l * ( 1 - $s * ( $var_h - $var_i ) );
			$var_3 = $l * ( 1 - $s * (1 - ( $var_h - $var_i ) ) );
			if		 ($var_i == 0) { $var_r = $l	 ; $var_g = $var_3	; $var_b = $var_1 ; }
			else if	 ($var_i == 1) { $var_r = $var_2 ; $var_g = $l		; $var_b = $var_1 ; }
			else if	 ($var_i == 2) { $var_r = $var_1 ; $var_g = $l		; $var_b = $var_3 ; }
			else if	 ($var_i == 3) { $var_r = $var_1 ; $var_g = $var_2	; $var_b = $l	  ; }
			else if	 ($var_i == 4) { $var_r = $var_3 ; $var_g = $var_1	; $var_b = $l	  ; }
			else				   { $var_r = $l	 ; $var_g = $var_1	; $var_b = $var_2 ; }
			$r = ceil($var_r * 255);
			$g = ceil($var_g * 255);
			$b = ceil($var_b * 255);
		}
		return array($r,$g,$b);
	}
	
	/**
	* Shorten hexadecimal code color
	* Example: _shorten_hexacolor(#FFFFFF) => #fff
	*
	* @param $hexa_color (hexadecimal format)
	* @return $shorten_hexa_color string
	*/
	public static function _shorten_hexacolor($hexa_color) {
		$hex_char = '[a-f0-9]';
		$shorten_hexa_color = strtolower(preg_replace("/(?<=^#)($hex_char)\\1($hex_char)\\2($hex_char)\\3\z/i", '\1\2\3', $hexa_color));
		return $shorten_hexa_color;
	}

	/**
	* Convert Hexadecimal Color to RGB color
	* Example: _hex_to_rgb(#FFFFFF) => array(255,255,255)
	*
	* @param $hexa_color (hexadecimal format)
	* @return $rgb array
	*/
	public static function _hex_to_rgb($hex) {
		// Regexp for a valid hex digit
		$d = '[a-fA-F0-9]';

		// Make sure $hex is valid
		if (preg_match("/^($d$d)($d$d)($d$d)\$/", $hex, $rgb)) {
			return array(
			 hexdec($rgb[1]),
			 hexdec($rgb[2]),
			 hexdec($rgb[3])
			 );
		}
		if (preg_match("/^($d)($d)($d)$/", $hex, $rgb)) {
			
			return array(
			 hexdec($rgb[1] . $rgb[1]),
			 hexdec($rgb[2] . $rgb[2]),
			 hexdec($rgb[3] . $rgb[3])
			 );
		}
	}

	/**
	* Convert RGB Color to Hexadecimal color
	* Example: _rgb_to_hex(array(255,255,255)) => #FFFFFF
	*
	* @param $rgb array
	* @return $hex string (hexadecimal format)
	*/
	public static function _rgb_to_hex($rgb) {
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
		return $hex;
	}

	/**
	* Darken of lighten a hexadecimal color
	* Example: _mix(#FFFFFF,0.60,0) => #999
	*
	* @param $hex string (hexadecimal format)
	* @param $percent int (percent)
	* @param $mask int (0-255)
	* @return $hex string (hexadecimal format)
	*/
	public static function _mix($hex, $percent, $mask) {
		$rgb = self::_hex_to_rgb($hex);
		if (!is_array($rgb)) {
			// hex2RGB will raise an error
			return false;
		}
		for ($i=0; $i<3; $i++) {
			$rgb[$i] = round($rgb[$i] * $percent) + round($mask * (1-$percent));
			// In case rounding up causes us to go to 256
			if ($rgb[$i] > 255) {
				$rgb[$i] = 255;
			}
		}
		return self::_rgb_to_hex($rgb);
	}

  /**
   * Replaces hsl(), cymk() and invalid W3C colors into rgb() colors
   * Example: "color: hsl(20, 80%, 50%);" => "color: rgb(128, 60, 26);"
   */
	public static function post_process() {

	  # Get the Color Replace options from the config
  	$color_replace_options = CSScaffold::config('ColorReplace');

		// list parameters
		$sheme_to_convert = array();
		if ($color_replace_options['convert_hsl_colors'] == 1) $sheme_to_convert[] = 'hsl';
		if ($color_replace_options['convert_hsla_colors'] == 1) $sheme_to_convert[] = 'hsla';
		if ($color_replace_options['convert_cmyk_colors'] == 1) $sheme_to_convert[] = 'cmyk';
		if ($color_replace_options['convert_cmyka_colors'] == 1) $sheme_to_convert[] = 'cmyka';

		$parsed_color = array(); // init of the replaced colors array

		/* HSL & CYMK */
		if (count($sheme_to_convert) > 0 && preg_match_all('#('.implode('|',$sheme_to_convert).')\([\'\"]?([^)\'\"]+)[\'\"]?\)#',CSS::$css,$out,PREG_SET_ORDER)) {
			foreach ($out as $match) {
				if (!in_array($match[2],$parsed_color)) {
					list($all, $scheme, $values) = $match;
					list($c1, $c2, $c3, $c4,$c5) = explode(',', "$values,,");
					
					# Conversion process
				  if ($scheme == 'hsl' || $scheme == 'hsla')
						$rgb = self::_hsl_to_rgb($c1, $c2, $c3);
				  if ($scheme == 'hsla')
						$rgb[] = $c4;
					if ($scheme == 'cmyk' || $scheme == 'cmyka')
						$rgb = self::_cmyk_to_rgb($c1, $c2, $c3, $c4);
					if ($scheme == 'cmyka')
						$rgb[] = $c5;
						
					CSS::replace('#'.$scheme.'\('.$values.'\)#',(($scheme == 'hsla' || $scheme == 'cmyka') ? 'rgba': 'rgb').'('.implode(',',$rgb).')',true); // css replacements
					$parsed_color[] = $scheme.':'.$values; // we add the color which has been replaced
				}
			}
		}

		/* Invalid W3C Colors */
		$list_colors = implode('|',array_keys(self::$colorsname));
		if (preg_match_all('#[\s:]('.$list_colors.')[\s;}]#',CSS::$css,$out,PREG_SET_ORDER) && $color_replace_options['convert_unvalid_colors'] == 1) {
			foreach($out as $match) {
				if (!in_array($color = $match[1],$parsed_color)) {
					CSS::replace('#([\s:])('.$color.')([\s;}])#','$1'.self::$colorsname[$color].'$3',true); // css replacements
					$parsed_color[] = $color; // we add the color which has been replaced
				}
			}
		}

		/* Shorten Hexadecimal Colors */
		if (preg_match_all('/(#[a-f0-9]{6})/i',CSS::$css,$out,PREG_SET_ORDER) && $color_replace_options['shorten_hexadecimal_colors'] == 1) {
			foreach($out as $match) {
				if (!in_array($color = $match[1],$parsed_color)) {
					CSS::replace($match[1],self::_shorten_hexacolor($match[1])); // css replacements
					$parsed_color[] = $color; // we add the color which has been replaced
				}
			}
		}
		
		/* Darken/Lighten Colors */
		$parsed_mixed_color = array(); // init of the replaced mixed colors array
		if (preg_match_all('/#([a-f0-9]{3,6})\((-|\+)([0-9\.]{0,4})\)|(rgb\([\'\"]?([^)\'\"]+)[\'\"]?\)\((-|\+)([0-9\.]{0,4})\))/i',CSS::$css,$out,PREG_SET_ORDER)) {
			foreach($out as $match) {
				if (!in_array($match[0],$parsed_mixed_color)) {
					$is_rgb = false; // init of rgb detection
					$color = (isset($match[5])) ? $match[5] : $match[1]; // extract color
					$operator = (isset($match[6])) ? $match[6] : $match[2]; // + (lighten) or - (darken)
					$level = (isset($match[7])) ? $match[7] : $match[3]; // lighten/darken level
					
					// check if color is rgb
					if (count($color = explode(',',$color)) == 3) {
						$color = self::_rgb_to_hex($color);
						$is_rgb = true; // rgb is now true
					} else // it's hexadecimal !
						$color = $color[0];
					
					$mixed_color = self::_mix($color, ($operator=='-') ? (1-$level) : $level, ($operator=='-') ? 0 : 255); // darken or lighten the color
	
					CSS::replace( $match[0],($is_rgb==true) ? 'rgb('.implode(',',self::_hex_to_rgb($mixed_color)).')' : self::_shorten_hexacolor('#'.$mixed_color) ); // css replacements
					$parsed_mixed_color[] = $match[0]; // we add the color which has been replaced
				}
			}
		}
	}
}