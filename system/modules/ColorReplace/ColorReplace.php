<?php

/**
 * ColorReplace class
 *
 * @author Olivier Gorzalka
 * @dependencies None
 **/


class ColorReplace extends Scaffold_Module
{

  /**
   * Converts cmyk colors to rgb colors
   * Example: _cmyk_to_rgb(87,83,20,10) # => array(30, 39, 184)
   *
   * @param $c Cyan (percentage)
   * @param $m Magenta (percentage)
   * @param $y Yellow (percentage)
   * @param $k Key or black (percentage)
   * @return $rgb array of rgb colors
   */
  public static function _cmyk_to_rgb($c, $m, $y, $k) {
    $c = (255 * intval($c)) / 100;
    $m = (255 * intval($m)) / 100;
    $y = (255 * intval($y)) / 100;
    $k = (255 * intval($k)) / 100;

    $r = round(((255 - $c) * (255 - $k)) / 255);
    $g = round((255 - $m) * (255 - $k) / 255);
    $b = round((255 - $y) * (255 - $k) / 255); 

    return array($r,$g,$b);
  }

  /**
   * Converts hsl colors to rgb colors
   * Example: _hsl_to_rgb(20, 80, 50) # => array(128, 60, 26)
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
      if($s == 0)
      {
          $r = $g = $b = $l * 255;
      }
      else
      {
          $var_h = $h * 6;
          $var_i = floor( $var_h );
          $var_1 = $l * ( 1 - $s );
          $var_2 = $l * ( 1 - $s * ( $var_h - $var_i ) );
          $var_3 = $l * ( 1 - $s * (1 - ( $var_h - $var_i ) ) );
          if       ($var_i == 0) { $var_r = $l     ; $var_g = $var_3  ; $var_b = $var_1 ; }
          else if  ($var_i == 1) { $var_r = $var_2 ; $var_g = $l      ; $var_b = $var_1 ; }
          else if  ($var_i == 2) { $var_r = $var_1 ; $var_g = $l      ; $var_b = $var_3 ; }
          else if  ($var_i == 3) { $var_r = $var_1 ; $var_g = $var_2  ; $var_b = $l     ; }
          else if  ($var_i == 4) { $var_r = $var_3 ; $var_g = $var_1  ; $var_b = $l     ; }
          else                   { $var_r = $l     ; $var_g = $var_1  ; $var_b = $var_2 ; }
          $r = ceil($var_r * 255);
          $g = ceil($var_g * 255);
          $b = ceil($var_b * 255);
      }
      return array($r,$g,$b);
  }

  /**
   * Replaces hsl() and cymk() into rgb() colors
   * Example: "color: hsl(20, 80%, 50%);" => "color: rgb(128, 60, 26);"
   */
  public static function post_process()
  {
    if (preg_match_all('#(hsl|cmyk)\([\'\"]?([^)\'\"]+)[\'\"]?\)#',CSS::$css,$out,PREG_SET_ORDER)) {
      foreach ($out as $match) {
        list($all, $scheme, $values) = $match;
        list($c1, $c2, $c3, $c4) = explode(',', "$values,");

        if ($match[1] == 'hsl')
          $rgb = self::_hsl_to_rgb($c1, $c2, $c3);
        else if ($match[1] == 'cmyk')
          $rgb = self::_cmyk_to_rgb($c1, $c2, $c3, $c4);

        CSS::replace('#'.$scheme.'\('.$values.'\)#','rgb('.implode(',',$rgb).')',true);
      }
    }
  }

}