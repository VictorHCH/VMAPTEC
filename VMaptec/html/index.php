<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/estilosindex.css"> -->
</head>

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php   
        require "../html/header.php";
    ?>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Bienvenidos al Recorrido</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout
                    called a jumbotron and three supporting pieces of content. Use it as a starting point to create
                    something more unique.</p>
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