<?php include("funkcje7112022.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zadanie</title>
  <style>
    th, td{
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>
<body>

  <!-- Zadanie 1 -->

  <form action="zadania7112022.php" method="POST">
    a - <input type="number" name="a" required autocomplete="off" id=""><br>
    b - <input type="number" name="b" required autocomplete="off" id=""><br>
    Suma:<input checked type="radio" name="dzialanie" value="suma" id="">
    Różnica:<input type="radio" name="dzialanie" value="roznica" id="">
    Iloczyn:<input type="radio" name="dzialanie" value="iloczyn" id="">
    Iloraz:<input type="radio" name="dzialanie" value="iloraz" id=""><br>
    <input type="submit" name="submit" value="Wyślij">
  </form>

  <?= (isset($_POST['submit'])) ? dzialanie($_POST['a'], $_POST['b'], $_POST['dzialanie']) : ''; ?>

  <p style="width: 100%; border-bottom: 1px solid black;"></p>
  Potęga:
  <br>
  <br>

  <!-- Zadanie 2 -->

  <form action="#" method="POST">
    a - <input type="number" name="c" required autocomplete="off" id=""><br>
    b - <input type="number" name="d" required autocomplete="off" id=""><br>
    <input type="submit" name="submit2" value="Wyślij">
  </form>

  <?= (isset($_POST['submit2'])) ? potega($_POST['c'], $_POST['d']) : ''; ?>

  <p style="width: 100%; border-bottom: 1px solid black;"></p>

  <!-- zadanie 3 -->
  <p>Zakres od 10 do 1000</p>
  <form action="#" method="post">
    ilość liczb losowanych: <input type="number" name="ile" required autocomplete="off" id=""><br>
    przez co podzielne: <input type="number" name="podzielne" required autocomplete="off" id=""><br>
    <button type="submit" name="submit3">Wyślij</button>
  </form>

  <?= (isset($_POST['submit3'])) ? podzielne($_POST['ile'], $_POST['podzielne']) : ''; ?>

  <p style="width: 100%; border-bottom: 1px solid black;"></p>
  
  <!-- Zadanie 4 -->

  <form action="#" method="post">
    <p>Pierwsze</p>
    Zakres dolny - <input type="number" name="zakresDolny" required autocomplete="off" id=""><br>
    Zakres górny - <input type="number" name="zakresGorny" required autocomplete="off" id=""><br>
    ilość losowanych - <input type="number" name="ileLosowanych" required autocomplete="off" id=""><br>
    <button type="submit" name="submit4">Wyślij</button>
  </form>

  <?php
    if(isset($_POST['submit4'])){
      $zakresDolny = $_POST['zakresDolny'];
      $zakresGorny = $_POST['zakresGorny'];
      $ileLosowanych = $_POST['ileLosowanych'];
      pierwsze($zakresDolny, $zakresGorny, $ileLosowanych);
    }
  ?>

  <p style="width: 100%; border-bottom: 1px solid black;"></p>

  <!-- zadanie 5 -->

  <form action="#" method="post">
    <input type="number" required autocomplete="off" placeholder="rozmieniarka" name="rozmieniarka" id="">
    <button type="submit" name="submit5">Wyślij</button>
  </form>
  <?php
    if (isset($_POST['submit5'])) {
      $monety = rozmieniarka($_POST['rozmieniarka']);
      echo '<table>';
      foreach ($monety as $name => $value) {
  ?>
        <tr>
          <th><?= $name ?></th>
          <td><?= $value ?></td>
        </tr>
  <?php
      }
      echo '</table>';
    }
  ?>
</body>
</html>