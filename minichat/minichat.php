<!DOCTYPE html>
        <head>
             <title>Mini-chat</title>
             <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
         </head>
         <style type="text/css">

         #Votre_message {
            font-family : georgia;
            font-size : 30px;
            text-align: left;
            border: 1px solid lightSlategrey; 
            padding: 50px; 
            background-color: lightsteelblue;
            color: darkslategrey;
         }
         
         #derniers_messages {
            font-family : georgia;
            font-size : 20px;
            text-align: left;
            padding: 50px;
            border: 1px solid darkslategrey; 
            background-color: gainsboro;
            color: darkslateblue;
        }

        h3{
            text-decoration: underline;
        }

         </style>
         <body>

         <section id="Votre_message">

         <form action="minichat_post.php" method="post">
             <p>
             <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" value="<?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']; ?>" /><br />
             <br />
             <label for="message">Message</label> : <input type="text" name="message" id="message" /><br />
             <br />     
             <input type="submit" value="Envoyer" style="color: grey; background-color: Mistyrose; border: 1px solid grey; font-size:20px;"/>
             </p>
         </form>
        </section>

    <section id="derniers_messages">
        <h3>Derniers messages : </h3>   

        <!--pour rafraichir la page-->
        <a href="minichat_post.php"><img src="http://etudesimpact.assemblee-nationale.fr/commun/images/rafraichir.png" alt="Rafraichir" /></a>
        <?php
        // Connexion à la base de données
        try
        {
                $bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
               
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT pseudo,message,date FROM minichat ORDER BY ID DESC LIMIT 0, 15');
        
        // Affichage de chaque message (faille de securité htmlspecialchars)
        while ($donnees = $reponse->fetch())
        {
                echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) .
                '</strong> : ' . htmlspecialchars($donnees['message']) . 
                '<small> ' .htmlspecialchars($donnees['date']).'</small></p>';
        }
       
        $reponse->closeCursor();
        ?>
     </section>
     </body>
</html>