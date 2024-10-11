<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nomiStudenti = ["Gabriel" , "Davide" , "Fabio"];
        $cognomeStudenti = ["Siano" , "Susini" , "Zavataro"];
        $studenti = [];
        for ($i=0; $i < 3; $i++){
            $listaVoti = array(rand(2,10) , rand(2,10) , rand(2,10));
            $stud = ["Nome" => $nomiStudenti[$i] , "Cognome" => $cognomeStudenti[$i] , "Voti" => $listaVoti];
            array_push($studenti , $stud);
        }    
    ?>
    <table style="border-collapse:collapse;">
        <tr>
            <td style="border:1px solid black">Nome</td>
            <td style="border:1px solid black">Cognome</td>
            <td style="border:1px solid black">Voto Max</td>
            <td style="border:1px solid black">Media</td>
        </tr>
    <?php
    for ($i=0; $i < count($studenti); $i++) { 
        $singoloStudente = $studenti[$i]; 
        echo "<tr style='border:1px solid black'><td style='border:1px solid black'>{$studenti[$i]['Nome']}</td><td style='border:1px solid black'>{$studenti[$i]['Cognome']}</td></tr>";
    }
    ?>
    </table>
</body>
</html>