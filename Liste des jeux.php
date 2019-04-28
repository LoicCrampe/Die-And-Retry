<section>
    <div class="col-12">
        <div class="col-sm-10 mr-auto ml-auto">
            <form method="post" id="Recherche">
                <input type="text" name="search" placeholder="Entrer un nom de jeux">
                <input type="submit" name="Valider" value="Rechercher">
            </form>
        </div>
    </div>
    <form action="" method="POST">
        <div class="col-12" id="ListeDeJeux">
            <table class="table table-bordered table-hover col-sm-10 mr-auto ml-auto">
                <thead class="table-dark">
                    <tr>
                        <th>SELECT</th>
                        <th>NOM</th>
                        <th>DATE</th>
                        <th class="Largeur">DEVELOPPEUR</th>
                        <th class="Largeur">CONSOLE</th>
                        <th class="Largeur">GENRE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            $Table = $bdd->query('SELECT DISTINCT videogames.id AS "Select", Title, ReleaseDate, developers.name AS "Developpeur", platform.name AS "Platforme", GROUP_CONCAT(genres.name SEPARATOR ", ") AS "Genre" 
            FROM videogames
            LEFT OUTER JOIN platform ON platform.id = videogames.idPlatform 
            LEFT OUTER JOIN developers ON developers.id = videogames.idDeveloper 
            LEFT OUTER JOIN gamesgenres ON gamesgenres.idVideogame = videogames.id 
            LEFT OUTER JOIN genres ON genres.id = gamesgenres.idGenre 
            GROUP BY videogames.id ORDER BY Title;');
            
            $Tableau = $Table -> fetchAll(PDO::FETCH_OBJ);
            foreach($Tableau as $game){
                echo "<tr>";
                    echo "<td><input type='radio' id='".$game->Select."' name='Selection' value='".$game->Select."'></td>";
                    echo "<td>".$game->Title."</td>";
                    echo "<td>".$game->ReleaseDate."</td>";
                    echo "<td class='Largeur'>".$game->Developpeur."</td>";
                    echo "<td class='Largeur'>".$game->Platforme."</td>";
                    echo "<td class='Largeur'>".$game->Genre."</td>";
                echo "</tr>";
            }
            ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-5 ButAMS">
            <input class="ButAMS" type="submit" id="ajouter" name="selection" value="AJOUTER">
            <input class="ButAMS" type="submit" id="modifier" name="selection" value="MODIFIER">
            <input class="ButAMS" type="submit" id="supprimer" name="selection" value="SUPPRIMER">
        </div>
    </form>
</section>
