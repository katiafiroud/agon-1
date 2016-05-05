//<?php

 mysql_connect('localhost','root','root')or die ('Erreur serveur');
 mysql_select_db('agon')or die ('Erreur selection base de données');
 echo "Connexion à la base de données réussie";

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Recherche avancée </title>
    </head>
    <body>
            
       <!-- <form method="post" action="recherche_avance.php" class="champ_recherche">
            <select name="critere3" id="critere3">
                <option>Nom du groupe</option>
                <?php // Affichage de la liste déroulante des groupes
                    //try {$bdd = new PDO('mysql:host=localhost;dbname=agon;charset=utf8', 'root', 'root');}
                    //catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
                    //$reponse = $bdd->query('SELECT * FROM Noms_groupes ORDER BY nom');
                    //while ($donnees = $reponse->fetch()) {
                       // echo '<option';
                        //if (isset($_POST['critere3'])) {
                            //if ($donnees['nom']==$_POST['critere3']) {echo ' selected="selected"';}
                        //}
                        //echo '>' . $donnees['nom'] . '</option>';
                    //}
                    $reponse->closeCursor();
                ?> 
            </select>
    
            <select name="critere1" id="critere1">
                <option>Choisir un sport</option>
                <?php // Affichage de la liste déroulante des sports
                    //try {$bdd = new PDO('mysql:host=localhost;dbname=agon;charset=utf8', 'root', 'root');}
                    //catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
                   // $reponse = $bdd->query('SELECT * FROM liste_sports ORDER BY nom');
                    //while ($donnees = $reponse->fetch()) {
                        //echo '<option';
                        //if (isset($_POST['critere1'])) {
                            //if ($donnees['nom']==$_POST['critere1']) {echo ' selected="selected"';}
                        //}
                        //echo '>' . $donnees['nom'] . '</option>';
                    //}
                    $reponse->closeCursor();
                ?>
            </select>
            <select name="critere2" id="critere2">
                <option>Choisir un département</option>
                <?php // Affichage de la liste déroulante des départements
                    //try {$bdd = new PDO('mysql:host=localhost;dbname=agon;charset=utf8', 'root', 'root');}
                    //catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
                    //$reponse = $bdd->query('SELECT * FROM departement ORDER BY numero');
                   // while ($donnees = $reponse->fetch()) {
                        //echo '<option';
                        //if (isset($_POST['critere2'])) {
                            //if ($donnees['nom']==$_POST['critere2']) {echo ' selected="selected"';}
                        //}
                        //echo '>' . $donnees['nom'] . '</option>';
                    //}
                    //$reponse->closeCursor();
                ?>
            </select><br/>
            <select name="critere4" id="critere4">
                <option>Choisir un département</option>
                <?php // Affichage de la liste déroulante des tranches d'age 
                    //try {$bdd = new PDO('mysql:host=localhost;dbname=agon;charset=utf8', 'root', 'root');}
                    //catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
                    //$reponse = $bdd->query('SELECT * FROM departement ORDER BY numero');
                    //while ($donnees = $reponse->fetch()) {
                        //echo '<option';
                        //if (isset($_POST['critere4'])) {
                            //if ($donnees['nom']==$_POST['critere4']) {echo ' selected="selected"';}
                        //}
                        //echo '>' . $donnees['nom'] . '</option>';
                    //}
                    $reponse->closeCursor();
                ?>
            <select>
            <input id="search-btn" type="submit" value="Rechercher" name="submit"/> 
            </form> 
    -->
            <form method="POST"action="recherche_avance.php">
            <strong> Je choisis </strong><br/>
            <input type='text' name='critere3' placeholder="Nom groupe "><br/>
            <input type='text' name='critere1' placeholder="Mon sport "><br/>
            <input type='text' name='critere2'placeholder="Ma région"><br/>
            <input type='text' name='critere4'placeholder="Mon age"><br/>
            <input type ='submit' value='Rechercher' name="submit"/>
           
            </form> 
           
           <?php
          	// on récupère les critères sélectionnés
                extract($_POST);
                $i = 0;
                
                // si la variable est présente, on lui affecte une place dans le tableau 'choix[]', qui nous servira ensuite à construire le WHERE de la requête.
           
            
            if(!empty($critere1))
            {
                $choix[] = "sport = '$critere1'";
                $i++;
            }
            if(!empty($critere2))
            {
                $choix[] = "departement= '$critere2'";
                $i++;
            }
            if(!empty($critere3))
            {
                $choix[$i++] = " nom_groupe = '$critere3'";
            }
            if(!empty($critere4))
            {
                $choix[] = "age= '$critere4'";
                $i++;
            }
            // on insère les éléments remplis dans une variable $critere, en commençant par la première occurrence, puis on boucle
            $critere = $choix[0]." ";
            for($j=1;$j<$i;$j++) 
            {
            $critere .= " AND ".$choix[$j]." ";
            }
            // enfin on fait la requête si $i >0, ça veut dire qu'il y a des critères
            if($i > 0)
            {   
                
                // requete de selection
                //try {$bdd = new PDO('mysql:host=localhost;dbname=agon;charset=utf8', 'root', 'root');}
                   //catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
                   //$reponse = $bdd->prepare('SELECT id,nom_groupe FROM groupe WHERE $critere  ORDER BY id');
                   //$reponse->execute(array('tmp' => $_POST['critere']));
                    //while ($donnees = $reponse->fetch()) {
                        //$verif=True;
                        //echo"<a href='recherche_avance.php?id=" . $donnees['id'] . "'>" . $donnees['nom_groupe'] . "</a></br>";
                    //}
                    //if (!isset($verif)) {echo "Pas de résultat !";}
                //}
                $chercher="SELECT id,nom_groupe FROM groupe WHERE $critere ORDER BY id";
                $requete=mysql_query($chercher)or die ('Erreur requete:'.mysql_error());
                   while($resultat=mysql_fetch_assoc($requete))
                    {
                       echo"<a href='recherche_avance.php?id= ".$resultat['id']."'>".$resultat['nom_groupe']."</a>" ;
                    }
            }
            else
            {
                $sql = "SELECT * FROM groupe ORDER BY id";
            }
 	//print_r($_POST);
 	$result = pg_query($chercher);
 	pg_close();
 	while($ligne = pg_fetch_array($result)){
        }     
            ?>
    </body>
</html>