<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Tramites</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilosindex.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <?php   
            require "../html/header.php";
    ?>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">Trámites Con Los Que Cuenta La Institución</h1>
                </div>
                <br>
                <p style="text-align: center;">Es necesario que vayas a pagar al departamento de financieros. </p>
                <p style="text-align: center;">Debes tener a la mano, tu número de control y nombre para poder realizar los
                    trámites. </p>
                <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Constancia de Estudios</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">Documento oficial que te acredita como estudiante inscrito en el
                                    Instituto Tecnológico de Parral.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Kardex</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">Documento oficial donde te muestra todas las asignaturas del Plan
                                    de Estudios correspondiente y la calificación por semestre.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Credencial de Estudiante</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">Identificación institucional del(de la) alumno(a) cuando se está
                                    inscrito en el ciclo escolar vigente. Es necesario que tengas una foto tamaño
                                    infantil.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Boleta de Calificaciones</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">Documento oficial donde te muestra todas las asignaturas del Plan
                                    de Estudios correspondiente y la calificación de semestres anteriores
                                    individualmente.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <p style="text-align: center;">Si quieres saber más acerca del pago de los tramites. <a href="pagos.php">Has Click Aquí</a>.</p>
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
    <?php
        require "../html/footer.php";
    ?>
</body>

</html>