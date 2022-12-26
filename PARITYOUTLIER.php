<?php
class parityOutlier{
  public static function findNeedle($arr) {
    $oddNumbers = array();
    $evenNumber = array();
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
    if (abs($arr[$i]) % 2 === 1) {
        array_push($oddNumbers, $arr[$i]);
    } else {
      array_push($evenNumber, $arr[$i]);
    }
    if (($evenNumber > 1 && $oddNumbers > 1)) {
      print_r(false);
    }
  }
        
    if (count($evenNumber) == 1) {
        print_r($evenNumber);
    } else if (count($oddNumbers) == 1) {
        print_r($oddNumbers);
    } else {
        print_r(false);
    }
    
  }

  public function __construct() {
    self::findNeedle([2, 4, 0, 100, 4, 11, 2602, 36]);
  }
}

new parityOutlier();
