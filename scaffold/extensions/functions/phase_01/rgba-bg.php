<?php
/**
 * Returns a crossbrowser background color using rgba
 *
 * @author Gorzalka Olivier
 * @param $r
 * @param $g
 * @param $b
 * @param $a
 * @return string
 */
 

function Scaffold_rgba_bg($r,$g,$b,$a)
{
  $rgba = array($r,$g,$b,$a); // rgba array
  
  // hexa values
  $hexvals = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F");
  
  $filterValue = "";
  
  for ($c = 0; $c < count($rgba); $c++) {
    if ($c !== 3) {
      // RGB
      $current = intval($rgba[$c]);
      if ($current < 0) {
        $current = 0;
      } else if ($current > 255) {
        $current = 255;
      }
      // division gives us the first hex component and the modulo gives us the second
      $filterValue .= ($hexvals[$current / 16].$hexvals[$current % 16]);
    } else {
      // the alpha
      $current = floatval($rgba[$c]);
      if ($current < 0) {
        $current = 0;
      } else if ($current > 1) {
        $current = 1;
      }
      $current = $current * 255;
      
      // Get the first hex component
      $filterValue = ($hexvals[$current / 16].$hexvals[$current % 16]).$filterValue;
    }
  }

  // preformatted rgba properties
  $css_properties = "background-color:rgb($r,$g,$b);\n";
  $css_properties .= "background-color:rgba($r,$g,$b,$a);\n";
  $css_properties .= "-ms-filter: \"progid:DXImageTransform.Microsoft.gradient(startColorstr=#$filterValue,endColorstr=#$filterValue)\";\n";  /* IE8 */
  $css_properties .= "filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#$filterValue,endColorstr=#$filterValue);\n"; /* IE6 & 7 */
  $css_properties .= "zoom: 1"; // has layout, beurk!
  
  return $css_properties; // replaces expression
}