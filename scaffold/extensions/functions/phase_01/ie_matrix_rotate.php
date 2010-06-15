<?php
/**
* Convert Hexadecimal Color to RGB color
* Example: _hex_to_rgb(#FFFFFF) => rgb(255,255,255)
*
* @param $hexa_color (hexadecimal format)
* @return $rgb string
*/
function Scaffold_ie_matrix_rotate($deg) {
  $rad = intval($deg)/2 * (pi() * 2 / 360) ;
  $costheta = cos($rad);
  $sintheta = sin($rad);

  $M11 = $costheta;
  $M12 = -$sintheta;
  $M21 = $sintheta;
  $M22 = $costheta;
	return "progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand',M11='".$M11."',M12='".$M12."',M21='".$M21."',M22='".$M22."')";
}