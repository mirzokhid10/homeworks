<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>Document</title>
</head>
<body>
    <?php
    // ****************************************************************
    // *********************** 0 - masala *****************************
    // ****************************************************************
    // 0-masala. $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67). 
    // Ushbu massivni elementlari o’sish tartibda saralang va hosil bo’lgan yangi 
    // massivni ekranga chiqaring.
    // Natija  : 1, 2, 5, 7, 12, 22, 56, 66, 67, 123
    $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
    for ($i=0; $i < count($n); $i++) {
      $min = $n[$i];
      for ($k=$i+1; $k < count($n); $k++) { 
        if ($min>$n[$k]) {
          $min = $n[$k];
          $n[$k] = $n[$i];
          $n[$i] = $min;
        }
      }
    }
    print_r($n);
    echo "<br/>";

    // ****************************************************************
    // *********************** 1 - masala *****************************
    // ****************************************************************
    // 1-masala.  $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67). 
    // Ushbu massivni elementlari kamayish tartibda saralang va hosil bo’lgan yangi 
    // massivni ekranga chiqaring.
    $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
    for ($i=0; $i < count($n); $i++) {
      $min = $n[$i];
      for ($k=$i+1; $k < count($n); $k++) { 
        if ($min<$n[$k]) {
          $min = $n[$k];
          $n[$k] = $n[$i];
          $n[$i] = $min;
        }
      }
    }
    print_r($n);
    echo "<br/>";
    
    // ****************************************************************
    // *********************** 2 - masala *****************************
    // ****************************************************************
    // 2-masala. Ushbu arrayni qo’llagan holda quyidagi matnni ekranga chiqaring.
    // $web = array('Yii2', 'PHP', 'MySQL', 'jQuery', 'Postgre SQL');
    // ‘Progress’ - Zamonaviy kasblar akademiyasida BACKEND DASTURLASH kursiga 
    // START beriladi.
    // Veb dasturlash (Backend) | PHP, jQuery, MySQL, Postgre SQL, Yii2 va hk
    $web = array('Yii2', 'PHP', 'MySQL', 'jQuery', 'Postgre SQL');
    echo '‘Progress’ - Zamonaviy kasblar akademiyasida BACKEND DASTURLASH kursiga START beriladi.' . "\n";
    echo 'Veb dasturlash (Backend) | ';

    for ($i = 0; $i < count($web); $i++) {
      echo $web[$i];

      // Add a comma after each element except the last one
      if ($i < count($web) - 1) {
      echo ', ';
      }
    }

    echo ' va hk';
    echo "<br/>";

    // ****************************************************************
    // *********************** 3 - masala *****************************
    // ****************************************************************
    // array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');
    // Yuqoridagi arraydan berilgan so’zni bor yo’qligini aniqlang. 
    // $suz = 'lue'; // Natija : bor
    // $suz = 'leu'; // Natija : yo'q

    $data = array(0 => 'blue', 1 => 'red', 2 => 'green string', 3 => 'red');
    $suz = 'lue';
    
    for ($i=0; $i < count($data); $i++) { 
      if(strpos($data[$i],$suz)) {
        echo "Natija: bor";
      }else {
        echo "Natija: yo'q";
      }
      break;
    }
    echo "<br/>";

    // ****************************************************************
    // *********************** 4 - masala *****************************
    // ****************************************************************
    // 4-masala. N butun son berilgan. 
    // 2 sonining dastlabki N ta darajasidan tashkil topgan massiv hosil 
    // qiling va ekranga chiqaring.
    $N =5;
    $son = 2;
    $m=[];
    for ($i=0; $i <= $N; $i++) { 
      $m[]= $son**$i;
    }
    print_r($m);
    echo "<br/>";
    // ****************************************************************
    // *********************** 5 - masala *****************************
    // ****************************************************************
    // 5-masala. N ta elementdan tashkil topgan massiv va K butun son berilgan. 
    // (1<=K<=N, ya’ni K - 1 va N orasida yotuvchi butun son). 
    // Massiv elementlari orasidan, indeksi K ga  karralilarini ekranga chiqaring. 
    // Shart operatorlari ishlatilmasin.
    $N = 7;
    $K = 4;
    $newarr = [];
    $massiv = array(10, 20, 30, 40, 50, 60, 70);
    $indeks_K = $K - 1;
    for ($k=0; $k <count($massiv); $k++) { 
      $newarr[] = $massiv[$k]%$K==0;
    }
    print_r($newarr);
    echo "<br/>";
    // ****************************************************************
    // *********************** 6 - masala *****************************
    // ****************************************************************
    // 6-masala. N ta elementdan tashkil topgan massiv berilgan. 
    // Dastlab massiv elementlari orasidan, juft indekslilarini ekranga chiqaring, 
    // keyin toq indekslilarini ekranga chiqaring. Shart operatorini ishlatmasdan.
    $n = array(12, 5, 2, 66, 22, 56, 123, 7, 1, 67);
    for ($i = 0; $i < count($n); $i += 2) {
      echo $n[$i] . ' ';
    }
    echo "<br/>";
    for ($i = 1; $i < count($n); $i += 2) {
        echo $n[$i] . ' ';
    }
    echo "<br/>";

    // ****************************************************************
    // *********************** 7 - masala *****************************
    // ****************************************************************
    // 7-masala. N ta elementdan tashkil topgan massiv berilgan va K butun son berilgan. 
    // Massiv elementlari orasida K ga eng yaqin elementini toping.
    // |a[i]-K| ayirma eng kichik bo’luvchi a[i] topilsin.
    $n = array(12, 53, 2, 66, 22, 56, 123, 7, 1, 67);
    $k=4;
    $newarr = [];

    for ($i = 0; $i < count($n); $i++) {
      $newarr[] = abs($n[$i]-$k);
    };
    print_r(min($newarr));
    echo "<br/>";
    // ****************************************************************
    // *********************** 8 - masala *****************************
    // ****************************************************************

    $massiv = array(8, 2, 3, 5, 2, 7, 5, 8);
    $indekslar = array();

    $length = count($massiv);

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($massiv[$i] == $massiv[$j]) {
                $indekslar[] = array($i, $j);
            }
        }
    }

    if (count($indekslar) >= 2) {
        $birinchi_indeks = $indekslar[0];
        echo "Massive indekslari: ".$birinchi_indeks[0] . " " . $birinchi_indeks[1];
    } else {
        echo "Massivda kamida ikki bir xil qiymatli element yo'q.";
    }
    echo "<br/>";

    // ****************************************************************
    // *********************** 9 - masala *****************************
    // ****************************************************************
    // 9-masala. ”2019-12-03 12:35:43” - Ushbu matnni quyidagi ko’rinishda yozing: 
    // “3-dekabr, 2019-yil, soat 12 dan 35 daqiqayu, 43 soniya o’tdi”
    $vaqt="2019-12-03 12:35:43";

    $vaqtexplode = explode(" ", $vaqt);
    $sanavaqtexplode = explode("-", $vaqtexplode[0]);
    $kun = $sanavaqtexplode[2];
    $oy = oy($sanavaqtexplode[1]);
    $yil = $sanavaqtexplode[0];

    $soatvaqtexplode = explode(":", $vaqtexplode[1]);
    $soat = $soatvaqtexplode[0];
    $daqiqa = $soatvaqtexplode[1];
    $soniya = $soatvaqtexplode[2];

    $masala = array($kun, $oy, $yil, "yil", "soat", $soat, "dan", $daqiqa, "daqiqayu,", $soniya, "soniya", "o'tdi");
    $natija = implode(" ", $masala);

    echo $natija;

    function oy($oy) {
        $oylar = array(
            "01" => "yanvar",
            "02" => "fevral",
            "03" => "mart",
            "04" => "aprel",
            "05" => "may",
            "06" => "iyun",
            "07" => "iyul",
            "08" => "avgust",
            "09" => "sentabr",
            "10" => "oktabr",
            "11" => "noyabr",
            "12" => "dekabr"
        );

        return $oylar[$oy];
    }
    ?>

  
</body>
</html>