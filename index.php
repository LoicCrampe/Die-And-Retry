<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die And Retry</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- ******************\\BOOTSTRAP****************** -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- ******************BOOTSTRAP//****************** -->
</head>

<body>
    <div id="page">

        <div id="header">
            <header>
                <div class="text-center logo">
                    <img src="DieandRetryLoic.png" class="img-fluid" alt="Responsive image">
                </div>
            </header>
        </div>
        <!--    Le code qui va changer dans la page est ecrit en dessous-->
        <div id="content">
            <?php
    
    require "connexion.php";
    if (!isset ($connexion)){
        require "Page de connexion.php";
    } else {
        require "Liste des jeux.php";
    }
    ?>
        </div>

        <div id="footer">
            <footer>
                <p>Die And Retry Copyright 2019</p>
            </footer>
        </div>

    </div>
    <script src="script.js"></script>
    <!-- ******************\\JQUERY****************** -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <!-- ******************JQUERY//****************** -->
    <!-- ******************\\BOOTSTRAP****************** -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- ******************BOOTSTRAP//****************** -->
</body>

</html>
