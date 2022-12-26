<?php
class theBlueOcean{
  public static function blueOcean($arr1, $arr2) {
    $tamp = [];
    for ($i = 0; $i < count($arr2); $i++) {
        for ($j = 0; $j < count($arr1); $j++) {
            if ($arr1[$j] !== $arr2[$i]) {
            array_push($tamp, $arr1[$j]);
            }
        }
    $arr1 = $tamp;
    $tamp = [];
  }
    print_r($arr1);
  }
  
  public function __construct() {
    self::blueOcean([1,5,5,5,5,3], [5]);
  }
}

new theBlueOcean();
