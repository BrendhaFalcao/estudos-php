<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Printing Arrays</title>
</head>

<body>

  <?php

  $family = [
    'Mãe' => ['Nome' => "Meire Meri", 'Idade' => 48],
    'Pai' => ['Nome' => "Deilson", 'Idade' => 50],
    'Irmão' => ['Nome' => "Enzo", 'Idade' => 20],
    'Namorado' => ['Nome' => "Patrick", 'Idade' => 27]
  ];

  //print_r($family);

  echo "O nome da minha mãe é " . $family['Mãe']['Nome'] . ".<br>";
  echo "O nome do meu pai é " . $family['Pai']['Nome'] . ".";


  ?>

</body>

</html>