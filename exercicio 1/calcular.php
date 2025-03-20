<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<?php

        $Nome = $_POST ['nome'];

        $xbu = $_POST ['xbu'];
        $xsa = $_POST ['xsa'];
        $xba = $_POST ['xba'];
        $xtu = $_POST ['xtu'];
        $xdu = $_POST ['xdu'];

        $agu = $_POST ['agu'];
        $suc = $_POST ['suc'];
        $lat = $_POST ['lat'];
        $sei = $_POST ['sei'];
        $lit = $_POST ['lit'];

        $qxbu = 6 * (int)$xbu;
        $qxsa = 8 * (int)$xsa;
        $qxba = 10 * (int)$xba;
        $qxtu = 12 * (int)$xtu;
        $qxdu = 15 * (int)$xdu;

        $qagu = 2 * (int)$agu;
        $qsuc = 5 * (int)$suc;
        $qlat = 3 * (int)$lat;
        $qsei = 5 * (int)$sei;
        $qlit = 8 * (int)$lit;


        $tot = $qxbu + $qxsa + $qxba + $qxtu + $qxdu + $qagu + $qsuc + $qlat + $qsei + $qlit; 
        echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>Olá $Nome, o total a pagar é de R$$tot</p>";

        if ($xbu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $xbu X-Burguers</p>"; 
        }else{}

        if ($xsa > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $xsa X-Saladas</p>";
        }else{}

        if ($xba > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $xba X-Bacons</p>";
        }else{}

        if ($xtu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $xtu X-Tudo</p>";
        }else{}

        if ($xdu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $xdu X-Duplos</p>";
        }else{}



        if ($agu > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $agu garrafas d'água</p>";
        }else{}

        if ($suc > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $suc sucos</p>";
        }else{}

        if ($lat > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $lat Latas de Refrigerante</p>";
        }else{}

        if ($sei > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $sei garrafas de refrigerante de 600ml</p>";
        }else{}

        if ($lit > 0){
            echo "<p style='color: rgb(250, 238, 225); font-family: Comic Sans MS; font-size: 20px;'>você comprou $lit garrafas de refrigerante de 2 litros</p>";
        }else{}

?>
    
</body>
</html>