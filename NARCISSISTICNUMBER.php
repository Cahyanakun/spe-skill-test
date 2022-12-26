<?php
   class isAngkaNarsis{
    public static function narcissistic($data) {
      $angkaString = (string) $data;
      $total = 0;
      $pangkat = 1;

      while ($data > $total ) {

          $total = 0;
          for ($i = 0; $i < strlen($angkaString); $i++) {
              $total += pow((int)$angkaString[$i], $pangkat);
          }
          if ($total == $data) {
              echo true;
          }
          $pangkat++;
      }
      echo false;
    }
  
    public function __construct() {
      self::narcissistic(154);
    }
  }
  
  new isAngkaNarsis();

?>