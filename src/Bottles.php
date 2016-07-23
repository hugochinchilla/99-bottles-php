<?php

class Bottles
{
  public function song()
  {
    return $this->verses(99, 0);
  }

  public function verses($hi, $lo=null)
  {
    if ($lo === null) {
      $lo = $hi;
    }

    return implode("\n", array_map([$this, 'verse'], range($hi, $lo)));
  }

  public function verse($n)
  {
    switch ($n) {
      case 0:
        return "No more bottles of beer on the wall, " .
               "no more bottles of beer.\n" .
               "Go to the store and buy some more, " .
               "99 bottles of beer on the wall.\n";
      case 1:
        return "1 bottle of beer on the wall, " .
               "1 bottle of beer.\n" .
               "Take it down and pass it around, " .
               "no more bottles of beer on the wall.\n";
      case 2;
        return "2 bottles of beer on the wall, " .
               "2 bottles of beer.\n" .
               "Take one down and pass it around, " .
               "1 bottle of beer on the wall.\n";
      default:
        $next = $n-1;
        return "$n bottles of beer on the wall, " .
               "$n bottles of beer.\n" .
               "Take one down and pass it around, " .
               "$next bottles of beer on the wall.\n";
    }
  }
}
