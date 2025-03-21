<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>

<?php

        $Nome = $_POST ['nome'];

        $cur = $_POST ['cur'];
        $man = $_POST ['man'];
        $sor = $_POST ['sor'];
        $fog = $_POST ['fog'];
        $fri = $_POST ['fri'];

        $pdf = $_POST ['pdf'];
        $cra = $_POST ['cra'];
        $ole = $_POST ['ole'];
        $mad = $_POST ['mad'];
        $edd = $_POST ['edd'];

        $qcur = 7 * (int)$cur;
        $qman = 6 * (int)$man;
        $qsor = 15 * (int)$sor;
        $qfog = 12 * (int)$fog;
        $qfri = 12 * (int)$fri;

        $qpdf = 5 * (int)$pdf;
        $qcra = 12 * (int)$cra;
        $qole = 9 * (int)$ole;
        $qmad = 23 * (int)$mad;
        $qedd = 10 * (int)$edd;


        $tot = $qcur + $qman + $qsor + $qfog + $qfri + $qpdf + $qcra + $qole + $qmad + $qedd; 
        echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>Olá $Nome, o total a pagar é de R$$tot</p>";

        if ($cur > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $cur poções de cura</p>"; 
        }else{}

        if ($man > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $man poções de mana</p>";
        }else{}

        if ($sor > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $sor poções de sorte</p>";
        }else{}

        if ($fog > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $fog poções de resistência ao fogo</p>";
        }else{}

        if ($fri > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $fri poções de resistência ao frio</p>";
        }else{}



        if ($pdf > 0){
            echo "<p style='color: rgb(212, 199, 243);; font-family: Comic Sans MS; font-size: 20px;'>você comprou $pdf pó de fada</p>";
        }else{}

        if ($cra > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $cra cristais arcanos</p>";
        }else{}

        if ($ole > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $ole óleos elementais </p>";
        }else{}

        if ($mad > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $mad mandrágoras</p>";
        }else{}

        if ($edd > 0){
            echo "<p style='color: rgb(212, 199, 243); font-family: Comic Sans MS; font-size: 20px;'>você comprou $edd escamas de dragão</p>";
        }else{}

?>
    
</body>
</html>