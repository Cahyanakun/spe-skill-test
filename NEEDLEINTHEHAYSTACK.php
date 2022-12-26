<?php
class findIntheHyStack{
  public static function findNeedle($arr, $dataFind) {
    // geet the Result 
    $result = in_array($dataFind,$arr);
    if($result){
    	echo $result;
    }else{
    	echo "Result Not Found";
    }
  }

  public function __construct() {
    self::findNeedle(["red","blue","yellow","black","grey"], "blue");
  }
}

new findIntheHyStack();

?>