<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Tramites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php   
        require "../html/header.php";
    ?>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">Edificios</h1>
                </div>
                <br><br>
                <div class="container marketing">

                    <!-- Three columns of text below the carousel -->
                    <div class="row">
                        <div class="col-lg-4" style="text-align: center;">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h2>Edificio A</h2>
                            <p>Aquí se encuentran los departamentos de Servicios escolares, Departamento de Servicios Generales, Titulación y Becas.
                                Puedes realizar los tramites de  solicitud de becas y su respectiva titulación, al igual que la solicitud y aprobación para ser acreedor de constancias. </p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4" style="text-align: center;">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>
                            <h2>Edificio AB</h2>
                            <p>Aquí se encuentra el edificio Financieros, puedes realizar todos los pagos correspondientes a los <a href="tramites.php">tramites</a>.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4" style="text-align: center;">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>
                            <h2>Edificio W</h2>
                            <p> Aquí se encuentra la biblioteca, con su apartado para solicitud de libros al igual que su area común
                                 en dónde puedes realizar tus tareas. Cuenta con cubículos, proporcionandote acceso a las bibliotecas virtuales con las que la escuela cuenta. </p>
                            
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4" style="text-align: center;">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h2>Edificio X</h2>
                            <p>Aquí se encuentra el edificio Administrativo</p>
                            
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4" style="text-align: center;">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                                    dy=".3em">140x140</text>
                            </svg>

                            <h2>Edifico Y</h2>
                            <p>Aquí se encuentra el edificio de Planeacion</p>
                            
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                    <br>
                    <br>
                    <br>
                    <div id="disqus_thread"></div>
                    <script>
                        (function () {
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://vmaptec.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <?php
        require "../html/footer.php";
    ?>
</body>

</html>