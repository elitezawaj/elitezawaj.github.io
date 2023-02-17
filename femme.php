<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <title>Inscription Elite Zawaj</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body style="background-color:#2a292b;color : #e6dcc6;">
    <h2 id="" target="_blank" rel="" style="color:#e6dcc6;pointer-events:all;">💞 Elite Zawaj 💞</h2>
        <hr style="background-color:#e6dcc6;height: 3px;">
        <form class="" action="sendf.php" method="post">


            Nom : <input type="text" name="nom" value=""> <br>
            Prenom : <input type="text" name="prenom" value=""> <br>
            date de naissance :<input type="date" name="date"> <br>
            Mail : <input style=" width: 50%;" type="text" name="mail" value=""> <br>
            Mail du wali : <input style=" width: 50%;" type="text" name="mailwali" value=""> <br>
            Numero du wali : <input style=" width: 50%;" type="text" name="numero" value=""> <br>
            Pays :<input type="text" name="pays" value=""> <br>
            Ville et code postal:<input type="text" name="ville" value=""> <p style="color:gray;">Nous nous concentrons que sur l'Île-de-France pour l'instant, mais lorsque le site évoluera, nous nous occuperons du reste du pays :)</p> <br>
            Nationalité : <input type="text" name="nationalite" value=""> <br>
            Origine :<input type="text" name="origine" value=""> <br>
            
            
            <label for="status">Status marital:</label>
            <select id="status" name="status">
                <option value="jamais marier">Jamais marrier</option>
                <option value="divorce">Divorcer</option>
                <option value="veuve">veuve</option>
            </select><br>

            Êtes vous converti ? :<br>
            <input type="radio" id="converti" name="converti" value="converti">
            <label for="converti1">oui</label>
            <input type="radio" id="converti" name="converti" value="pas converti">
            <label for="converti0">non</label><br><br>

            Avez vous des enfants ? :<br>
            <input type="radio" id="enfant" name="enfant" value="a des enfants">
            <label for="enfant1">oui</label>
            <input type="radio" id="enfant" name="enfant" value="n'a pas d'enfant">
            <label for="enfant0">non</label><br><br>

            Taille :<input type="text" name="taille" value=""> <br>
            Poids :<input type="text" name="poids" value=""> <br>

            <label for="physique">Forme de corps:</label>
            <select id="physique" name="physique">
                <option value="mince"> mince</option>
                <option value="moyen">Moyen</option>
                <option value="rond">Rond</option>
                <option value="musclé">musclé</option>
            </select><br>
            

            Priez vous 5 fois par jour et à l'heure ? :<br>
            <input type="radio" id="prie" name="prie" value="prie">
            <label for="prie1">oui</label>
            <input type="radio" id="prie" name="prie" value="ne prie pas">
            <label for="prie0">non</label><br><p style="color : orange;">Nb: (si ce n'est pas le cas nous nous occuperons pas de vous ) !</p>
            

            

            description physique :<textarea name="physiquedes"> </textarea><br>
            description Islam :<textarea name="islam"> </textarea><br>
            description personnelle :<textarea name="personnelle"> </textarea><br>

            Travail / Éducation :<textarea name="travail"> </textarea><br>

            Habillement :<textarea style="height: 50%;" name="habille"> </textarea><p style="color : orange;">Nb: Nous ne nous occupons pas de femmes qui sortent maquillé, en pantalon ou pas de manière "sharia" (ie : tout couvert sauf le visage et les mains) </p><br>

            Je ne fume pas et je ne bois pas d'alcool :<br> <br>
            <input type="checkbox" id="alcool" value="1" >
            <label for="alcool">Je confirme</label> <br> <br>

            <p style="color : orange;"> Nb: Nous n'acceptons pas les fumeurs et les buveurs.</p>

            Mes passe-temps, ma famille, mon style de vie, mes intérêts et mes compétences :<textarea name="hobies"> </textarea><br>

            Vos critères indispensables chez le futur partenaire:<textarea style="height: 300px;" name="critere"> </textarea><br>
            Précision que vous jugez nécessaire d'ajouter  :<textarea name="autre" placeholder="hesitez pas à vous venter :)"></textarea><br>

            
            <p style="color : red;">En cliquant sur "envoyer", je jure devant Allah que toutes les informations que j'ai inscrites sont vraies.</p>
            <button style=" margin: 0 auto;width:100%;"type="submit" name="send">Envoyer</button>
        </form>
    </body>

</html>
