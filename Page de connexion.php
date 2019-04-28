<div class="container connexion col-sm-10 offset-sm-1 col-lg-4 offset-lg-4 text-center">
    <form action="" method="post">
        <p>Identifiant :</p>
        <input type="text" name="ID" placeholder="Identifiant">
        <p>Mot de passe :</p>
        <input type="password" name="PSW" placeholder="Mot de passe">
        <div>
            <input type="submit" name="OK" value="CONNEXION" id="ButConnexion">
        </div>
    </form>
</div>
<p class="text-danger text-center">
    <?php 
    echo $Error;
    ?>
</p>
