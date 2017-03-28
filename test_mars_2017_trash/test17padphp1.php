<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">  
    
    <head>
        <title > Ceci est une page HTML de test </title >
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    </head>

    <body>
        <p>cette ligne ligne est en dur
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
            <?php
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
    </body>
</html>