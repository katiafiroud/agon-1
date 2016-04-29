<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="formulaire_inscription.css" />
        <title>formulaire_inscription</title>
    </head>
    <body>
     
        <?php    
        if (isset($_POST['submit']))
        {
         $nom_user=htmlentities(trim($_POST['nom_user']));
         $prenom_user=htmlentities(trim($_POST['prenom_user']));
         $date_de_naissance=htmlentities(trim($_POST['date_de_naissance']));
         $sexe=htmlentities(trim($_POST['sexe']));
         $departement=htmlentities(trim($_POST['departement']));
         $email=htmlentities(trim($_POST['email']));
         $pseudo=htmlentities(trim($_POST['pseudo']));
         $password=htmlentities(trim($_POST['password']));
         $repeatpassword=htmlentities(trim($_POST['repeatpassword']));
            if($nom_user&&$prenom_user&&$date&&$departement&&$sexe&&$pseudo&&$email&&$password&&$repeatpassword){
              if($password==$repeatpassword)
              {
              $password=md5();
              $connect=  mysql_connect('localhost','root')or die('Error');
              mysql_select_db('agon');
              $query= mysql_query("INSERT INTO users VALUES (",'$nom_user','$prenom_user','$date_de_naissance','$sexe','$departement','$email','$pseudo','password');
              
              die("inscription terminée  connectez vous ");        
              }
              else echo  "Les deux mot de passe doivent etre identiques!";
                  
            }
            else echo"Veuillez renseigner tous les champs indiqués";
        }
        ?>
        <form methode="POST"action="formulaire_inscription.php">
          <div class = "conteneur">
            <p class = "titre">Inscrivez-vous ! C'EST GRATUIT !!</p>

            <label for = "nom_user">Nom : </label></br> 
            <input type="text" name="nom_user" id="nom_user" maxlength ="30"></br>

            <label for = "prenom_user">Prenom : </label></br> 
            <input type="text" name="prenom_user" id="prenom_user" maxlength ="30"></br> 
            
            <label for = "date_de_naissance">Date de naissance : </label></br> 
            <input type="date" name="date_de_naissance" id="date"></br>
            
            <label for = "sexe">Sexe: </label></br> 
            <input type="text" name="sexe" id="sexe" maxlength ="30"></br>
            
           <label for = "departement">Departement : </label></br> 
            <input type="text" name="departement" id="departement" maxlength ="30"></br>

            <label for = "email">Adresse e-mail : </label></br> 
            <input type="email" name="email" id="email" maxlength ="50"></br>

            <label for = "pseudo">Pseudo : </label></br> 
            <input type="text" name="pseudo" id="pseudo" maxlength ="30"></br>

            <label for = "password">Mot de passe : </label></br> 
            <input type="password" name="password" id="password" maxlength ="30"></br>

            <label for = "repeatpassword">Confirmer le mot de passe : </label></br> 
            <input type="password" name="repeatpassword" id="repeatpassword" maxlength ="30"></br>

           

            <code><input type="submit" value="Valider"name="submit"class = "agrandir_bouton" ></code>
        
        </div>
        </form>
    </body>
</html>