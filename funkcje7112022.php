<?php
  // Zadanie 1
  function dzialanie($a, $b, $dzialanie){
    switch ($dzialanie) {
      case 'suma':
        $wynik = intval($a) + intval($b);
        echo 'Suma: ' . $wynik;
        break;
      case 'roznica':
        $wynik = intval($a) - intval($b);
        echo 'Różnica: ' . $wynik;
        break;
      case 'iloczyn':
        $wynik = intval($a) * intval($b);
        echo 'Iloczyn: ' . $wynik;
        break;
      case 'iloraz':
        if($b == 0) {
          echo 'Nie dziel przez zero!';
        } else {
          $wynik = intval($a) / intval($b);
          echo 'Iloraz: ' . $wynik;
        }
        break;
    }
  }

  // zadanie 2
  function potega($a, $b){
    $wynik = pow($a, $b);

    // pętla for: 
    // if ($b > 0) {
    //   $wynik = $a;
    //   for($i = 1; $i < $b; $i++){
    //     $wynik = $wynik * $a;
    //   }
    // }elseif ($b < 0) {
    //   $wynik = 1/$a;
    //   for($i = 0; $i > $b; $i--){
    //     $wynik = $wynik * (1 / $a);
    //   }
    // }else{
    //   $wynik = 1;
    // }


    // pętla while:
    // if ($b > 0) {
    //   $wynik = $a;
    //   while($b > 1){
    //     $wynik = $wynik * $a;
    //     $b--;
    //   }
    // }
    // elseif ($b < 0) {
    //   $wynik = 1/$a;
    //   while($b < -1){
    //     $wynik = $wynik * (1 / $a);
    //     $b++;
    //   }
    // }
    // else{
    //   $wynik = 1;
    // }

    echo '<br>Potęga: ' . $wynik;
  }

  // zadanie 3

  function podzielne($a, $b){
    $wynik = 0;
    while($a > 0){
      $rand = rand(10, 1000);
      if($rand % $b == 0){
        $wynik += $rand;
        $a--;
      }
    }
    echo '<br>Wynik: ' . $wynik;
  }

  // zadanie 4

  function pierwsze($a, $b, $c){
    function czy_pierwsza($d){
      $pierwsza = true;
      for($i = 2; $i < $d / 2; $i++){
        if($d % $i == 0){
          $pierwsza = false;
          break;
        }
      }
      return $pierwsza;
    }
    $wynik = [];
    if ($b>$c) {
      $temp = $a;
      $a = $b;
      $b = $temp;
    }
    while ($c > 0) {
      $rand = rand($a, $b);
      if(czy_pierwsza($rand)){
          array_push($wynik, $rand);
          $c--;
        }
      }
      return $wynik;
    }
  

  // zadanie 5
  function rozmieniarka($kwota){
    $banknoty = array(
      '10zł' => 0,
      '5zł' => 0,
      '2zł' => 0,
      '1zł' => 0,
    );
    
    for ($kwota; $kwota != 0 ; ) { 
      if ($kwota >= 10) {
        $kwota -= 10;
        $banknoty['10zł']++;
      }
      elseif ($kwota >= 5) {
        $kwota -= 5;
        $banknoty['5zł']++;
      }
      elseif ($kwota >= 2) {
        $kwota -= 2;
        $banknoty['2zł']++;
      }
      elseif ($kwota >= 1) {
        $kwota -= 1;
        $banknoty['1zł']++;
      }
    }
    return $banknoty;
  }
?>