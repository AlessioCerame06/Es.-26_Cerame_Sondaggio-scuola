<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TABELLA SONDAGGI</title>
    </head>
    <body>

    <style>
        .stileTabella {
            border: solid, 2px, black;
            border-collapse: collapse;
        }


    </style>
    <?php
        function stampaTabella ($nome, $cognome, $dataDiNascita, $orarioDiArrivo, $mezzoDitrasporto, $corsoInglese, $corsoTeatro, $attivitaSportive) {
            echo "<table class='stileTabella'>";
            echo "<tr> <th class='stileTabella'>Nome</th> <th class='stileTabella'>Cognome</th> <th class='stileTabella'>Data di nascita</th> <th class='stileTabella'>Orario di arrivo</th> <th class='stileTabella'>Mezzo di trasporto</th> <th class='stileTabella'>Corsi</th> </tr>";
            echo "<tr> <td class='stileTabella'>$nome</td> <td class='stileTabella'>$cognome</td> <td class='stileTabella'>$dataDiNascita</td> <td class='stileTabella'>$orarioDiArrivo</td>";
            if (isset($_GET["mezzoDiTrasporto"])) {
                if ($_GET["mezzoDiTrasporto"] == "piedi") {
                    $strMezzoDiTrasporto = "<td>A piedi</td>";
                } else if ($_GET["mezzoDiTrasporto"] == "mezziPubblici") {
                    $strMezzoDiTrasporto = "<td>Mezzi pubblici</td>";
                } else {
                    $strMezzoDiTrasporto = "<td>In auto</td>";
                }
            }
            echo $strMezzoDiTrasporto;
            $strCorsi = "";
            if (isset($_GET["corsoInglese"])) {
                $strCorsi .= "Corso d'inglese,";
            } 
            if (isset($_GET["corsoTeatro"])) {
                $strCorsi .= "Corso di teatro,";
            }
            if (isset($_GET["attivitaSportive"])) {
                $strCorsi .= "Attività sportive";
            }

            if ($strCorsi == "Corso d'inglese,") {
                $strCorsi = "Corso d'inglese";
            } else if ($strCorsi == "Corso di teatro,") {
                $strCorsi = "Corso di teatro";
            } else if ($strCorsi == "Corso d'inglese,Corso di teatro,") {
                $strCorsi = "Corso d'inglese,Corso di teatro";
            }

            if ($strCorsi != "") {
                echo "<td class='stileTabella'>$strCorsi</td>";
            } else {
                echo "<td class='stileTabella'>Nessun attività</td>";
            }
            echo "</tr></table>";
        }

        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $dataDiNascita = $_GET["dataDiNascita"];
        $orarioDiArrivo = $_GET["orarioDiArrivo"];
        $mezzoDitrasporto = $_GET["mezzoDiTrasporto"];

        if (isset($_GET["corsoInglese"])) {
            $corsoInglese = $_GET["corsoInglese"];
        } else {
            $corsoInglese = "";
        }

        if (isset($_GET["corsoTeatro"])) {
            $corsoTeatro = $_GET["corsoTeatro"];
        } else {
            $corsoTeatro = "";
        }

        if (isset($_GET["attivitaSportive"])) {
            $attivaiSportve = $_GET["attivitaSportive"];
        } else {
            $attivitaSportive = "";
        }
        

        stampaTabella ($nome, $cognome, $dataDiNascita, $orarioDiArrivo, $mezzoDitrasporto, $corsoInglese, $corsoTeatro, $attivitaSportive);
    ?>
        
    </body>
</html>
