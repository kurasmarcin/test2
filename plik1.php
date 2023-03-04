<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <title>Tytuł strony</title>
</head>
<body>
<?php
$firstName="Janusz";
$lastName = "Janusz";
echo  "Imie i nazwisko: $firstName $lastName<br>" ;


//heredoc
$data = <<< DATA
<hr>
Imie: $firstName<br>
Nazwisko: $lastName<br>

DATA;
echo $data
//nowdoc
echo <<< 'DATA'
<hr>
Imie: $firstName<br>
Nazwisko: $lastName<br>

DATA;

$bin=0b1010;
echo $bin;
$oct=0o10;
echo $oct;
$hex=0x1A;
echo $hex;
?>
  <header></header>
  
  
    <h1></h1>
  
  <footer></footer>
</body>
</html>