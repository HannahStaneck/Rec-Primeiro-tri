<!DOCTYPE html>

<?php 

include 'array.php';
include 'sort.php';
$sort  = sorteio();
$aposta = isset($_POST['valor']) ? $_POST['valor'] : "";
$numero =  isset($_POST['numero']) ? $_POST['numero'] : "";


 ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo do Bicho</title>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>
<body >


<form method="post">
<fieldset>
  <label>Digite seus Numeros</label>
  <input type="text" name="numero" id="numero" value="<?php echo $numero; ?>" maxlength="4">



<br><br>


<label>insira sua aposta</label>
<br>
<input type="text" name="valor" id="valor" value="<?php echo $aposta; ?>">

<input type="submit" value="Apostar">
<br>
</fieldset>






<?php 

if (substr($sort[0], 2) == 1 or substr($sort[0], 2) == 2 or  substr($sort[0], 2) == 3 or substr($sort[0], 2) == 4 ) {
    $foto = $arrayBichos[1];
    $id = 1;
    }
    if (substr($sort[0], 2) == 5 or substr($sort[0], 2) == 6 or  substr($sort[0], 2) == 7 or substr($sort[0], 2) == 8 ) {
    $foto = $arrayBichos[2];
    $id = 2;
    }
    if (substr($sort[0], 2) == 9 or substr($sort[0], 2) == 10 or  substr($sort[0], 2) == 11 or substr($sort[0], 2) == 12 ) {
    $foto = $arrayBichos[3];
    $id = 3;
    }
    if (substr($sort[0], 2) == 13 or substr($sort[0], 2) == 14 or  substr($sort[0], 2) == 15 or substr($sort[0], 2) == 16 ) {
    $foto = $arrayBichos[4];
    $id = 4;
    }
    if (substr($sort[0], 2) == 17 or substr($sort[0], 2) == 18 or  substr($sort[0], 2) == 19 or substr($sort[0], 2) == 20 ) {
    $foto = $arrayBichos[5];
    $id = 5;
    }
    if (substr($sort[0], 2) == 21 or substr($sort[0], 2) == 22 or  substr($sort[0], 2) == 23 or substr($sort[0], 2) == 24 ) {
    $foto = $arrayBichos[6];
    $id = 6;
    }
    if (substr($sort[0], 2) == 25 or substr($sort[0], 2) == 26 or  substr($sort[0], 2) == 27 or substr($sort[0], 2) == 28 ) {
    $foto = $arrayBichos[7];
    $id = 7;
    }
    if (substr($sort[0], 2) == 29 or substr($sort[0], 2) == 30 or  substr($sort[0], 2) == 31 or substr($sort[0], 2) == 32 ) {
    $foto = $arrayBichos[8];
    $id = 8;
    }
    if (substr($sort[0], 2) == 33 or substr($sort[0], 2) == 34 or  substr($sort[0], 2) == 35 or substr($sort[0], 2) == 36 ) {
    $foto = $arrayBichos[9];
    $id = 9;
    }
    if (substr($sort[0], 2) == 37 or substr($sort[0], 2) == 38 or  substr($sort[0], 2) == 39 or substr($sort[0], 2) == 40 ) {
    $foto = $arrayBichos[10];
    $id = 10;
    }
    if (substr($sort[0], 2) == 41 or substr($sort[0], 2) == 42 or  substr($sort[0], 2) == 43 or substr($sort[0], 2) == 44 ) {
    $foto = $arrayBichos[11];
    $id = 11;
    }
    if (substr($sort[0], 2) == 45 or substr($sort[0], 2) == 46 or  substr($sort[0], 2) == 47 or substr($sort[0], 2) == 48 ) {
    $foto = $arrayBichos[12];
    $id = 12;
    }
    if (substr($sort[0], 2) == 49 or substr($sort[0], 2) == 50 or  substr($sort[0], 2) == 51 or substr($sort[0], 2) == 52 ) {
    $foto = $arrayBichos[13];
    $id = 13;
    }
    if (substr($sort[0], 2) == 53 or substr($sort[0], 2) == 54 or  substr($sort[0], 2) == 55 or substr($sort[0], 2) == 56 ) {
    $foto = $arrayBichos[14];
    $id = 14;
    }
    if (substr($sort[0], 2) == 57 or substr($sort[0], 2) == 58 or  substr($sort[0], 2) == 59 or substr($sort[0], 2) == 60 ) {
    $foto = $arrayBichos[15];
    $id = 15;
    }
    if (substr($sort[0], 2) == 61 or substr($sort[0], 2) == 62 or  substr($sort[0], 2) == 63 or substr($sort[0], 2) == 64 ) {
    $foto = $arrayBichos[16];
    $id = 16;
    }
    if (substr($sort[0], 2) == 65 or substr($sort[0], 2) == 66 or  substr($sort[0], 2) == 67 or substr($sort[0], 2) == 68 ) {
    $foto = $arrayBichos[17];
    $id = 17;
    }
    if (substr($sort[0], 2) == 69 or substr($sort[0], 2) == 70 or  substr($sort[0], 2) == 71 or substr($sort[0], 2) == 72 ) {
    $foto = $arrayBichos[18];
    $id = 18;
    }
    if (substr($sort[0], 2) == 73 or substr($sort[0], 2) == 74 or  substr($sort[0], 2) == 75 or substr($sort[0], 2) == 76 ) {
    $foto = $arrayBichos[19];
    $id = 19;
    }
    if (substr($sort[0], 2) == 77 or substr($sort[0], 2) == 78 or  substr($sort[0], 2) == 79 or substr($sort[0], 2) == 80 ) {
    $foto = $arrayBichos[20];
    $id = 20;
    }
    if (substr($sort[0], 2) == 81 or substr($sort[0], 2) == 82 or  substr($sort[0], 2) == 83 or substr($sort[0], 2) ==84 ) {
    $foto = $arrayBichos[21];
    $id = 21;
    }
    if (substr($sort[0], 2) == 85 or substr($sort[0], 2) == 86 or  substr($sort[0], 2) == 87 or substr($sort[0], 2) == 88 ) {
    $foto = $arrayBichos[22];
    $id = 22;
    }
    if (substr($sort[0], 2) == 89 or substr($sort[0], 2) == 90 or  substr($sort[0], 2) == 91 or substr($sort[0], 2) == 92 ) {
    $foto = $arrayBichos[23];
    $id = 23;
    }
    if (substr($sort[0], 2) == 93 or substr($sort[0], 2) == 94 or  substr($sort[0], 2) == 95 or substr($sort[0], 2) == 96 ) {
    $foto = $arrayBichos[24];
    $id = 24;
    }
    if (substr($sort[0], 2) == 97 or substr($sort[0], 2) == 98 or  substr($sort[0], 2) == 99  or substr($sort[0], 2) == 00) {
    $foto = $arrayBichos[25];
    $id = 25;
    }


if (substr($sort[1], 2) == 1 or substr($sort[1], 2) == 2 or  substr($sort[1], 2) == 3 or substr($sort[1], 2) == 4 ) {
    $foto1 = $arrayBichos[1];
     $id1 = 1;

    }
    if (substr($sort[1], 2) == 5 or substr($sort[1], 2) == 6 or  substr($sort[1], 2) == 7 or substr($sort[1], 2) == 8 ) {
    $foto1 = $arrayBichos[2];
     $id1 = 2;

    }
    if (substr($sort[1], 2) == 9 or substr($sort[1], 2) == 10 or  substr($sort[1], 2) == 11 or substr($sort[1], 2) == 12 ) {
    $foto1 = $arrayBichos[3];
     $id1 = 3;
    }
    if (substr($sort[1], 2) == 13 or substr($sort[1], 2) == 14 or  substr($sort[1], 2) == 15 or substr($sort[1], 2) == 16 ) {
    $foto1 = $arrayBichos[4];
     $id1 = 4;
    }
    if (substr($sort[1], 2) == 17 or substr($sort[1], 2) == 18 or  substr($sort[1], 2) == 19 or substr($sort[1], 2) == 20 ) {
    $foto1 = $arrayBichos[5];
     $id1 = 5;
    }
    if (substr($sort[1], 2) == 21 or substr($sort[1], 2) == 22 or  substr($sort[1], 2) == 23 or substr($sort[1], 2) == 24 ) {
    $foto1 = $arrayBichos[6];
     $id1 = 6;
    }
    if (substr($sort[1], 2) == 25 or substr($sort[1], 2) == 26 or  substr($sort[1], 2) == 27 or substr($sort[1], 2) == 28 ) {
    $foto1 = $arrayBichos[7];
     $id1 = 7;
    }
    if (substr($sort[1], 2) == 29 or substr($sort[1], 2) == 30 or  substr($sort[1], 2) == 31 or substr($sort[1], 2) == 32 ) {
    $foto1 = $arrayBichos[8];
     $id1 = 8;
    }
    if (substr($sort[1], 2) == 33 or substr($sort[1], 2) == 34 or  substr($sort[1], 2) == 35 or substr($sort[1], 2) == 36 ) {
    $foto1 = $arrayBichos[9];
     $id1 = 9;
    }
    if (substr($sort[1], 2) == 37 or substr($sort[1], 2) == 38 or  substr($sort[1], 2) == 39 or substr($sort[1], 2) == 40 ) {
    $foto1 = $arrayBichos[10];
    $id1 = 10;
    }
    if (substr($sort[1], 2) == 41 or substr($sort[1], 2) == 42 or  substr($sort[1], 2) == 43 or substr($sort[1], 2) == 44 ) {
    $foto1 = $arrayBichos[11];
    $id1 = 11;
    }
    if (substr($sort[1], 2) == 45 or substr($sort[1], 2) == 46 or  substr($sort[1], 2) == 47 or substr($sort[1], 2) == 48 ) {
    $foto1 = $arrayBichos[12];
    $id1 = 12;
    }
    if (substr($sort[1], 2) == 49 or substr($sort[1], 2) == 50 or  substr($sort[1], 2) == 51 or substr($sort[1], 2) == 52 ) {
    $foto1 = $arrayBichos[13];
    $id1 = 13;
    }
    if (substr($sort[1], 2) == 53 or substr($sort[1], 2) == 54 or  substr($sort[1], 2) == 55 or substr($sort[1], 2) == 56 ) {
    $foto1 = $arrayBichos[14];
    $id1 = 14;
    }
    if (substr($sort[1], 2) == 57 or substr($sort[1], 2) == 58 or  substr($sort[1], 2) == 59 or substr($sort[1], 2) == 60 ) {
    $foto1 = $arrayBichos[15];
    $id1 = 15;
    }
    if (substr($sort[1], 2) == 61 or substr($sort[1], 2) == 62 or  substr($sort[1], 2) == 63 or substr($sort[1], 2) == 64 ) {
    $foto1 = $arrayBichos[16];
    $id1 = 16;
    }
    if (substr($sort[1], 2) == 65 or substr($sort[1], 2) == 66 or  substr($sort[1], 2) == 67 or substr($sort[1], 2) == 68 ) {
    $foto1 = $arrayBichos[17];
    $id1 = 17;
    }
    if (substr($sort[1], 2) == 69 or substr($sort[1], 2) == 70 or  substr($sort[1], 2) == 71 or substr($sort[1], 2) == 72 ) {
    $foto1 = $arrayBichos[18];
    $id1 = 18;
    }
    if (substr($sort[1], 2) == 73 or substr($sort[1], 2) == 74 or  substr($sort[1], 2) == 75 or substr($sort[1], 2) == 76 ) {
    $foto1 = $arrayBichos[19];
    $id1 = 19;
    }
    if (substr($sort[1], 2) == 77 or substr($sort[1], 2) == 78 or  substr($sort[1], 2) == 79 or substr($sort[1], 2) == 80 ) {
    $foto1 = $arrayBichos[20];
    $id1 = 20;
    }
    if (substr($sort[1], 2) == 81 or substr($sort[1], 2) == 82 or  substr($sort[1], 2) == 83 or substr($sort[1], 2) ==84 ) {
    $foto1 = $arrayBichos[21];
    $id1 = 21;
    }
    if (substr($sort[1], 2) == 85 or substr($sort[1], 2) == 86 or  substr($sort[1], 2) == 87 or substr($sort[1], 2) == 88 ) {
    $foto1 = $arrayBichos[22];
    $id1 = 22;
    }
    if (substr($sort[1], 2) == 89 or substr($sort[1], 2) == 90 or  substr($sort[1], 2) == 91 or substr($sort[1], 2) == 92 ) {
    $foto1 = $arrayBichos[23];
    $id1 = 23;
    }
    if (substr($sort[1], 2) == 93 or substr($sort[1], 2) == 94 or  substr($sort[1], 2) == 95 or substr($sort[1], 2) == 96 ) {
    $foto1 = $arrayBichos[24];
    $id1 = 24;
    }
    if (substr($sort[1], 2) == 97 or substr($sort[1], 2) == 98 or  substr($sort[1], 2) == 99  or substr($sort[1], 2) == 00) {
    $foto1 = $arrayBichos[25];
    $id1 = 25;
    }


if (substr($sort[2], 2) == 1 or substr($sort[2], 2) == 2 or  substr($sort[2], 2) == 3 or substr($sort[2], 2) == 4 ) {
    $foto2 = $arrayBichos[1];
     $id2 = 1;
    }
    if (substr($sort[2], 2) == 5 or substr($sort[2], 2) == 6 or  substr($sort[2], 2) == 7 or substr($sort[2], 2) == 8 ) {
    $foto2 = $arrayBichos[2];
     $id2 = 2;
    }
    if (substr($sort[2], 2) == 9 or substr($sort[2], 2) == 10 or  substr($sort[2], 2) == 11 or substr($sort[2], 2) == 12 ) {
    $foto2 = $arrayBichos[3];
     $id2 = 3;
    }
    if (substr($sort[2], 2) == 13 or substr($sort[2], 2) == 14 or  substr($sort[2], 2) == 15 or substr($sort[2], 2) == 16 ) {
    $foto2 = $arrayBichos[4];
     $id2 = 4;
    }
    if (substr($sort[2], 2) == 17 or substr($sort[2], 2) == 18 or  substr($sort[2], 2) == 19 or substr($sort[2], 2) == 20 ) {
    $foto2 = $arrayBichos[5];
     $id2 = 5;
    }
    if (substr($sort[2], 2) == 21 or substr($sort[2], 2) == 22 or  substr($sort[2], 2) == 23 or substr($sort[2], 2) == 24 ) {
    $foto2 = $arrayBichos[6];
     $id2 = 6;
    }
    if (substr($sort[2], 2) == 25 or substr($sort[2], 2) == 26 or  substr($sort[2], 2) == 27 or substr($sort[2], 2) == 28 ) {
    $foto2 = $arrayBichos[7];
     $id2 = 7;
    }
    if (substr($sort[2], 2) == 29 or substr($sort[2], 2) == 30 or  substr($sort[2], 2) == 31 or substr($sort[2], 2) == 32 ) {
    $foto2 = $arrayBichos[8];
     $id2 = 8;
    }
    if (substr($sort[2], 2) == 33 or substr($sort[2], 2) == 34 or  substr($sort[2], 2) == 35 or substr($sort[2], 2) == 36 ) {
    $foto2 = $arrayBichos[9];
     $id2 = 9;
    }
    if (substr($sort[2], 2) == 37 or substr($sort[2], 2) == 38 or  substr($sort[2], 2) == 39 or substr($sort[2], 2) == 40 ) {
    $foto2 = $arrayBichos[10];
    $id2 = 10;
    }
    if (substr($sort[2], 2) == 41 or substr($sort[2], 2) == 42 or  substr($sort[2], 2) == 43 or substr($sort[2], 2) == 44 ) {
    $foto2 = $arrayBichos[11];
    $id2 = 11;
    }
    if (substr($sort[2], 2) == 45 or substr($sort[2], 2) == 46 or  substr($sort[2], 2) == 47 or substr($sort[2], 2) == 48 ) {
    $foto2 = $arrayBichos[12];
    $id2 = 12;
    }
    if (substr($sort[2], 2) == 49 or substr($sort[2], 2) == 50 or  substr($sort[2], 2) == 51 or substr($sort[2], 2) == 52 ) {
    $foto2 = $arrayBichos[13];
    $id2 = 13;
    }
    if (substr($sort[2], 2) == 53 or substr($sort[2], 2) == 54 or  substr($sort[2], 2) == 55 or substr($sort[2], 2) == 56 ) {
    $foto2 = $arrayBichos[14];
    $id2 = 14;
    }
    if (substr($sort[2], 2) == 57 or substr($sort[2], 2) == 58 or  substr($sort[2], 2) == 59 or substr($sort[2], 2) == 60 ) {
    $foto2 = $arrayBichos[15];
    $id2 = 15;
    }
    if (substr($sort[2], 2) == 61 or substr($sort[2], 2) == 62 or  substr($sort[2], 2) == 63 or substr($sort[2], 2) == 64 ) {
    $foto2 = $arrayBichos[16];
    $id2 = 16;
    }
    if (substr($sort[2], 2) == 65 or substr($sort[2], 2) == 66 or  substr($sort[2], 2) == 67 or substr($sort[2], 2) == 68 ) {
    $foto2 = $arrayBichos[17];
    $id2 = 17;
    }
    if (substr($sort[2], 2) == 69 or substr($sort[2], 2) == 70 or  substr($sort[2], 2) == 71 or substr($sort[2], 2) == 72 ) {
    $foto2 = $arrayBichos[18];
    $id2 = 18;
    }
    if (substr($sort[2], 2) == 73 or substr($sort[2], 2) == 74 or  substr($sort[2], 2) == 75 or substr($sort[2], 2) == 76 ) {
    $foto2 = $arrayBichos[19];
    $id2 = 19;
    }
    if (substr($sort[2], 2) == 77 or substr($sort[2], 2) == 78 or  substr($sort[2], 2) == 79 or substr($sort[2], 2) == 80 ) {
    $foto2 = $arrayBichos[20];
    $id2 = 20;
    }
    if (substr($sort[2], 2) == 81 or substr($sort[2], 2) == 82 or  substr($sort[2], 2) == 83 or substr($sort[2], 2) ==84 ) {
    $foto2 = $arrayBichos[21];
    $id2 = 21;
    }
    if (substr($sort[2], 2) == 85 or substr($sort[2], 2) == 86 or  substr($sort[2], 2) == 87 or substr($sort[2], 2) == 88 ) {
    $foto2 = $arrayBichos[22];
    $id2 = 22;
    }
    if (substr($sort[2], 2) == 89 or substr($sort[2], 2) == 90 or  substr($sort[2], 2) == 91 or substr($sort[2], 2) == 92 ) {
    $foto2 = $arrayBichos[23];
    $id2 = 23;
    }
    if (substr($sort[2], 2) == 93 or substr($sort[2], 2) == 94 or  substr($sort[2], 2) == 95 or substr($sort[2], 2) == 96 ) {
    $foto2 = $arrayBichos[24];
    $id2 = 24;
    }
    if (substr($sort[2], 2) == 97 or substr($sort[2], 2) == 98 or  substr($sort[2], 2) == 99  or substr($sort[2], 2) == 00) {
    $foto2 = $arrayBichos[25];
    $id2 = 25;
    }


if (substr($sort[3], 2) == 1 or substr($sort[3], 2) == 2 or  substr($sort[3], 2) == 3 or substr($sort[3], 2) == 4 ) {
    $foto3 = $arrayBichos[1];
     $id3 = 1;
    }
    if (substr($sort[3], 2) == 5 or substr($sort[3], 2) == 6 or  substr($sort[3], 2) == 7 or substr($sort[3], 2) == 8 ) {
    $foto3 = $arrayBichos[2];
     $id3 = 2;
    }
    if (substr($sort[3], 2) == 9 or substr($sort[3], 2) == 10 or  substr($sort[3], 2) == 11 or substr($sort[3], 2) == 12 ) {
    $foto3 = $arrayBichos[3];
     $id3 = 3;
    }
    if (substr($sort[3], 2) == 13 or substr($sort[3], 2) == 14 or  substr($sort[3], 2) == 15 or substr($sort[3], 2) == 16 ) {
    $foto3 = $arrayBichos[4];
     $id3 = 4;
    }
    if (substr($sort[3], 2) == 17 or substr($sort[3], 2) == 18 or  substr($sort[3], 2) == 19 or substr($sort[3], 2) == 20 ) {
    $foto3 = $arrayBichos[5];
     $id3 = 5;
    }
    if (substr($sort[3], 2) == 21 or substr($sort[3], 2) == 22 or  substr($sort[3], 2) == 23 or substr($sort[3], 2) == 24 ) {
    $foto3 = $arrayBichos[6];
     $id3 = 6;
    }
    if (substr($sort[3], 2) == 25 or substr($sort[3], 2) == 26 or  substr($sort[3], 2) == 27 or substr($sort[3], 2) == 28 ) {
    $foto3 = $arrayBichos[7];
     $id3 = 7;
    }
    if (substr($sort[3], 2) == 29 or substr($sort[3], 2) == 30 or  substr($sort[3], 2) == 31 or substr($sort[3], 2) == 32 ) {
    $foto3 = $arrayBichos[8];
     $id3 = 8;
    }
    if (substr($sort[3], 2) == 33 or substr($sort[3], 2) == 34 or  substr($sort[3], 2) == 35 or substr($sort[3], 2) == 36 ) {
    $foto3 = $arrayBichos[9];
     $id3 = 9;
    }
    if (substr($sort[3], 2) == 37 or substr($sort[3], 2) == 38 or  substr($sort[3], 2) == 39 or substr($sort[3], 2) == 40 ) {
    $foto3 = $arrayBichos[10];
    $id3 = 10;
    }
    if (substr($sort[3], 2) == 41 or substr($sort[3], 2) == 42 or  substr($sort[3], 2) == 43 or substr($sort[3], 2) == 44 ) {
    $foto3 = $arrayBichos[11];
    $id3 = 11;
    }
    if (substr($sort[3], 2) == 45 or substr($sort[3], 2) == 46 or  substr($sort[3], 2) == 47 or substr($sort[3], 2) == 48 ) {
    $foto3 = $arrayBichos[12];
    $id3 = 12;
    }
    if (substr($sort[3], 2) == 49 or substr($sort[3], 2) == 50 or  substr($sort[3], 2) == 51 or substr($sort[3], 2) == 52 ) {
    $foto3 = $arrayBichos[13];
    $id3 = 13;
    }
    if (substr($sort[3], 2) == 53 or substr($sort[3], 2) == 54 or  substr($sort[3], 2) == 55 or substr($sort[3], 2) == 56 ) {
    $foto3 = $arrayBichos[14];
    $id3 = 14;
    }
    if (substr($sort[3], 2) == 57 or substr($sort[3], 2) == 58 or  substr($sort[3], 2) == 59 or substr($sort[3], 2) == 60 ) {
    $foto3 = $arrayBichos[15];
    $id3 = 15;
    }
    if (substr($sort[3], 2) == 61 or substr($sort[3], 2) == 62 or  substr($sort[3], 2) == 63 or substr($sort[3], 2) == 64 ) {
    $foto3 = $arrayBichos[16];
    $id3 = 16;
    }
    if (substr($sort[3], 2) == 65 or substr($sort[3], 2) == 66 or  substr($sort[3], 2) == 67 or substr($sort[3], 2) == 68 ) {
    $foto3 = $arrayBichos[17];
    $id3 = 17;
    }
    if (substr($sort[3], 2) == 69 or substr($sort[3], 2) == 70 or  substr($sort[3], 2) == 71 or substr($sort[3], 2) == 72 ) {
    $foto3 = $arrayBichos[18];
    $id3 = 18;
    }
    if (substr($sort[3], 2) == 73 or substr($sort[3], 2) == 74 or  substr($sort[3], 2) == 75 or substr($sort[3], 2) == 76 ) {
    $foto3 = $arrayBichos[19];
    $id3 = 19;
    }
    if (substr($sort[3], 2) == 77 or substr($sort[3], 2) == 78 or  substr($sort[3], 2) == 79 or substr($sort[3], 2) == 80 ) {
    $foto3 = $arrayBichos[20];
    $id3 = 20;
    }
    if (substr($sort[3], 2) == 81 or substr($sort[3], 2) == 82 or  substr($sort[3], 2) == 83 or substr($sort[3], 2) ==84 ) {
    $foto3 = $arrayBichos[21];
    $id3 = 21;
    }
    if (substr($sort[3], 2) == 85 or substr($sort[3], 2) == 86 or  substr($sort[3], 2) == 87 or substr($sort[3], 2) == 88 ) {
    $foto3 = $arrayBichos[22];
    $id3 = 22;
    }
    if (substr($sort[3], 2) == 89 or substr($sort[3], 2) == 90 or  substr($sort[3], 2) == 91 or substr($sort[3], 2) == 92 ) {
    $foto3 = $arrayBichos[23];
    $id3 = 23;
    }
    if (substr($sort[3], 2) == 93 or substr($sort[3], 2) == 94 or  substr($sort[3], 2) == 95 or substr($sort[3], 2) == 96 ) {
    $foto3 = $arrayBichos[24];
    $id3 = 24;
    }
    if (substr($sort[3], 2) == 97 or substr($sort[3], 2) == 98 or  substr($sort[3], 2) == 99  or substr($sort[3], 2) == 00) {
    $foto3 = $arrayBichos[25];
    $id3 = 25;
    }


if (substr($sort[4], 2) == 1 or substr($sort[4], 2) == 2 or  substr($sort[4], 2) == 3 or substr($sort[4], 2) == 4 ) {
    $foto4 = $arrayBichos[1];
     $id4 = 1;
    }
    if (substr($sort[4], 2) == 5 or substr($sort[4], 2) == 6 or  substr($sort[4], 2) == 7 or substr($sort[4], 2) == 8 ) {
    $foto4 = $arrayBichos[2];
     $id4 = 2;
    }
    if (substr($sort[4], 2) == 9 or substr($sort[4], 2) == 10 or  substr($sort[4], 2) == 11 or substr($sort[4], 2) == 12 ) {
    $foto4 = $arrayBichos[3];
     $id4 = 3;
    }
    if (substr($sort[4], 2) == 13 or substr($sort[4], 2) == 14 or  substr($sort[4], 2) == 15 or substr($sort[4], 2) == 16 ) {
    $foto4 = $arrayBichos[4];
     $id4 = 4;
    }
    if (substr($sort[4], 2) == 17 or substr($sort[4], 2) == 18 or  substr($sort[4], 2) == 19 or substr($sort[4], 2) == 20 ) {
    $foto4 = $arrayBichos[5];
     $id4 = 5;
    }
    if (substr($sort[4], 2) == 21 or substr($sort[4], 2) == 22 or  substr($sort[4], 2) == 23 or substr($sort[4], 2) == 24 ) {
    $foto4 = $arrayBichos[6];
     $id4 = 6;
    }
    if (substr($sort[4], 2) == 25 or substr($sort[4], 2) == 26 or  substr($sort[4], 2) == 27 or substr($sort[4], 2) == 28 ) {
    $foto4 = $arrayBichos[7];
     $id4 = 7;
    }
    if (substr($sort[4], 2) == 29 or substr($sort[4], 2) == 30 or  substr($sort[4], 2) == 31 or substr($sort[4], 2) == 32 ) {
    $foto4 = $arrayBichos[8];
     $id4 = 8;
    }
    if (substr($sort[4], 2) == 33 or substr($sort[4], 2) == 34 or  substr($sort[4], 2) == 35 or substr($sort[4], 2) == 36 ) {
    $foto4 = $arrayBichos[9];
     $id4 = 9;
    }
    if (substr($sort[4], 2) == 37 or substr($sort[4], 2) == 38 or  substr($sort[4], 2) == 39 or substr($sort[4], 2) == 40 ) {
    $foto4 = $arrayBichos[10];
    $id4 = 10;
    }
    if (substr($sort[4], 2) == 41 or substr($sort[4], 2) == 42 or  substr($sort[4], 2) == 43 or substr($sort[4], 2) == 44 ) {
    $foto4 = $arrayBichos[11];
    $id4 = 11;
    }
    if (substr($sort[4], 2) == 45 or substr($sort[4], 2) == 46 or  substr($sort[4], 2) == 47 or substr($sort[4], 2) == 48 ) {
    $foto4 = $arrayBichos[12];
    $id4 = 12;
    }
    if (substr($sort[4], 2) == 49 or substr($sort[4], 2) == 50 or  substr($sort[4], 2) == 51 or substr($sort[4], 2) == 52 ) {
    $foto4 = $arrayBichos[13];
    $id4 = 13;
    }
    if (substr($sort[4], 2) == 53 or substr($sort[4], 2) == 54 or  substr($sort[4], 2) == 55 or substr($sort[4], 2) == 56 ) {
    $foto4 = $arrayBichos[14];
    $id4 = 14;
    }
    if (substr($sort[4], 2) == 57 or substr($sort[4], 2) == 58 or  substr($sort[4], 2) == 59 or substr($sort[4], 2) == 60 ) {
    $foto4 = $arrayBichos[15];
    $id4 = 15;
    }
    if (substr($sort[4], 2) == 61 or substr($sort[4], 2) == 62 or  substr($sort[4], 2) == 63 or substr($sort[4], 2) == 64 ) {
    $foto4 = $arrayBichos[16];
    $id4 = 16;
    }
    if (substr($sort[4], 2) == 65 or substr($sort[4], 2) == 66 or  substr($sort[4], 2) == 67 or substr($sort[4], 2) == 68 ) {
    $foto4 = $arrayBichos[17];
    $id4 = 17;
    }
    if (substr($sort[4], 2) == 69 or substr($sort[4], 2) == 70 or  substr($sort[4], 2) == 71 or substr($sort[4], 2) == 72 ) {
    $foto4 = $arrayBichos[18];
    $id4 = 18;
    }
    if (substr($sort[4], 2) == 73 or substr($sort[4], 2) == 74 or  substr($sort[4], 2) == 75 or substr($sort[4], 2) == 76 ) {
    $foto4 = $arrayBichos[19];
    $id4 = 19;
    }
    if (substr($sort[4], 2) == 77 or substr($sort[4], 2) == 78 or  substr($sort[4], 2) == 79 or substr($sort[4], 2) == 80 ) {
    $foto4 = $arrayBichos[20];
    $id4 = 20;
    }
    if (substr($sort[4], 2) == 81 or substr($sort[4], 2) == 82 or  substr($sort[4], 2) == 83 or substr($sort[4], 2) ==84 ) {
    $foto4 = $arrayBichos[21];
    $id4 = 21;
    }
    if (substr($sort[4], 2) == 85 or substr($sort[4], 2) == 86 or  substr($sort[4], 2) == 87 or substr($sort[4], 2) == 88 ) {
    $foto4 = $arrayBichos[22];
    $id4 = 22;
    }
    if (substr($sort[4], 2) == 89 or substr($sort[4], 2) == 90 or  substr($sort[4], 2) == 91 or substr($sort[4], 2) == 92 ) {
    $foto4 = $arrayBichos[23];
    $id4 = 23;
    }
    if (substr($sort[4], 2) == 93 or substr($sort[4], 2) == 94 or  substr($sort[4], 2) == 95 or substr($sort[4], 2) == 96 ) {
    $foto4 = $arrayBichos[24];
    $id4 = 24;
    }
    if (substr($sort[4], 2) == 97 or substr($sort[4], 2) == 98 or  substr($sort[4], 2) == 99  or substr($sort[4], 2) == 00) {
    $foto4 = $arrayBichos[25];
    $id4 = 25;
    }



    echo "<br>";
    echo "1° premio:$sort[0]".$foto;
    echo "<br>";

    echo "<br>";
    echo "2° premio:$sort[1]".$foto1;
    echo "<br>";

    echo "<br>";
    echo "3° premio:$sort[2]".$foto2;
    echo "<br>";

    echo "<br>";
    echo "4° premio:$sort[3]".$foto3;
    echo "<br>";

    echo "<br>";
    echo "5° premio:$sort[4]".$foto4;
    echo "<br>";









 ?>
















 ?>




</form>


<?php 

	if ($numero == $sort[0]) {
		$premio = $aposta * 35; 
		echo "<h1 style='color: blue'>“Parabéns, você ganhou o 1° prêmio o valor de R$ $premio”</h1>";
	}
	if ($numero == $sort[1]) {
		$premio = $aposta * 30; 	
		echo "<h1 style='color: blue'>“Parabéns, você ganhou o 2° prêmio o valor de R$ $premio”</h1>";
	}
	if ($numero == $sort[2]) {
		$premio = $aposta * 25; 
		echo "<h1 style='color: blue'>“Parabéns, você ganhou o 3° prêmio o valor de R$ $premio”</h1>";
	}
	if ($numero == $sort[3]) {
		$premio = $aposta * 20; 
		echo "<h1 style='color: blue'>“Parabéns, você ganhou o 4° prêmio o valor de R$ $premio”</h1>";
	}
	if ($numero == $sort[4]) {
		$premio = $aposta * 10; 	
		echo "<h1 style='color: blue'>“Parabéns, você ganhou o 5° prêmio o valor de R$ $premio”</h1>";
	}else{
		echo "<h1 style='color: red'>“Que pena, você não ganhou”</h1>";
	}
















 ?>















    
</body>
</html>