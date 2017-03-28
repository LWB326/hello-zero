<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">  
    
    <head>
        <title > Ceci ets une page structure de base .php</title >
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    </head>

    <body>
        <p>Cette ligne est en html (dur), les ligne suivantes, sauf commençant par HL, sont du code généré en php
        </p>
        <p> 
              <?php
                echo "celle-ci a été écrite en php";
            ?>    
            <?php
                $nombre_de_lignes = 1;

                while ($nombre_de_lignes <= 100)
                {
                echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
                $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
                }
            ?> 
        </p>
         <p> HL autre fonction</p>
          <p>  <?php
                $compteur = 1;
                $chaine = 'bonjour Monsieur du Corbeau';
                $chaine = str_shuffle($chaine);
                
                while ($compteur <= 3)
                {
                    echo $chaine;
                    $compteur++;
                }
            ?>
        </p>
        <p> HL autre fonction</p>
            <?php
            // La précision dépend de votre directive precision
                echo sqrt(9); // 3
                echo sqrt(10); // 3.16227766 ...
            ?>
        <p> HL autre fonction</p>
            <?php
            function DireBonjour($nom)
            {
            echo "Bonjour " . $nom . " !<br />";
            }

            DireBonjour("Marie");
            DireBonjour("Patrice");
            DireBonjour("Edouard");
            DireBonjour("Pascale");
            DireBonjour("François");
            DireBonjour("Benoît");
            DireBonjour("Père Noël");
            ?>
        
        
    </body>
</html>