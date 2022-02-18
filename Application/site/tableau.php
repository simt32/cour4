html>
    <head>
    <meta charset="utf-8">
    <title>Création d'un tableau dynamique</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table tr td {
            border: 1px solid black;
            background-color: #ddd;
        }

    </style>
    </head>
    <body>
        <a href="index.html" target="_self">Accueill</a>
        <a href="index.php" target="_self">Index.php</a>
        <a href="liste.php" target="_self">Liste HTML</a>
        <a>Tableau UTF-8</a>
        <h2 id="PetitTitre" name ="titre"> Quelque exercise du cours App Web</h2>
        <h1>Tableau créé dynamiquement</h1>
        <table>
            <tr><th>Décimales</th><th>Caractères</th><th>Décimales</th><th>Caractères</th></tr>
        <?php
            $debut = 0;// mb_ord("A", "UTF-8");
            $fin = 11000;//mb_ord("z", "UTF-8");

            $nbColonnes = 2;
            $nbLignes =10000;

            for ($ligne=0; $ligne < $nbLignes; $ligne++) { 
                echo "<tr>";
                for ($colonne=0; $colonne < $nbColonnes; $colonne++) { 
                    if($debut<=$fin) {
                        echo "<td>".$debut."</td><td>".utf8_encode(chr($debut++))."</td>";
                    } else {
                        echo "<td>&nbsp;</td><td>&nbsp;</td>";
                    }
                }
                echo "</tr>";
            }
        ?>            
        </table>
    </body>
</html>