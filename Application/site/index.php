<html>
    <head>
        <meta charset="utf-8">
        <title>une page web</title>
    </head>

    <body>
    <h1 id="GrosTitre" name ="titre"> Quelque exercise du cours App Web</h1>
        <a href="index.html" target="_self">Accueill</a>
        <a>index.php </a>
        <a href="liste.php" target="_self">liste HTML </a>
        <a href="tableau.php" target="_self">tableau UTF-8</a>
        <h2 id="PetitTitre" name ="titre"> Quelque exercise du cours App Web</h2>
        <p>allo!  <b>toi</b> <a href="tableau.php">Tableau</a>
           
            <?php 
               echo 'Salut !"';
            ?>
            </p>
            <?php
                $chaine = 'allo je doit extraire les 10 premier caractère de cette phrase'
                //echo $chaine

            ?>

            


            <script> type= "text/javascript">
                window.document.write("<h1>ou du témiscamingue?</h1>")
            </script>
            <h1> un tableau bien formé </h1>
            <table>
                
                <tr>
                    <td>1</td><td>2</td>
                </tr>
                <tr>
                    <td>3</td><td>&nbsp;</td>
                </tr>

            </table>
            <table>
            <?php 
                $nbLignes = 5000;
                $nbColonne = 2;
                $valeur = 0;
                for ($ligne=0; $ligne < $nbLignes; $ligne++) { 
                    echo "<tr>";

                    for ($colonne =0; $colonne < $nbColonne; $colonne++) { 
                        echo "<td>".utf8_encode(chr($valeur++))."</td>";
                        
                    }

                    echo "</tr>";

                }
            ?>
            </table>

    </body>
</html>