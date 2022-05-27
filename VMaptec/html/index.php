<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="../css/estilosindex.css"> -->
</head>

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../html/index.php">
            <h2 id="titulo"><img src="../imagenes/logo.jpg" width="90px" height="60px" style="border-radius: 15px;">
                &nbsp; VMapTec<span class="sr-only">(current)</span></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../html/creditos.php">¿Qué es un Crédito?</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../html/tramites.php">¿Qué es un Trámite?</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../html/edificios.php">¿Qué hay en los edificios del Tecnológico?</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">¡Dale un vistazo a tu Tecnológico!</h1>

            </div>
            <div>
                <iframe src="http://www.itparral.edu.mx/images/RecorridosVirtuales/Pano2VR/output/index.html"
                    width="100%" height="650px"></iframe>
            </div>
        </div>
    </div>
    <?php
        require "../html/footer.php";
    ?>
</body>

</html>