<!-- Aqui empieza el php donde te redirige si ya hay una sesion iniciada -->
<?php
     session_start();                                                                               //Iniciamos la sesion

     if(!isset($_SESSION['usuario'])){
        header("location: ../html/login.php");                                                  //Si existe una sesion no sera necesario volver a logearnos, este codigo nos mandara a la pagina principal
     }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <title>Tramites</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png" />
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png" />
        <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json" />
        <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
        <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico" />
        <meta name="theme-color" content="#7952b3" />
        <link rel="stylesheet" href="../css/estilosheader.css">

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
        <header class="header">
            <div class="container">
                <div class="logo">  
                    <h1>VMapTec</h1>
                </div>
                <nav class="menu">
                    <a href="index.html">Recorrido</a>
                    <a href="#">Aulas</a>
                    <a href="#">Tramites</a>
                    <a href="#">Blog</a>
                    <a href="#">Sing Up</a>
                </nav>
            </div>
        </header>
        <main>
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <br>
                        <h1 class="fw-light">Selecciona el Tramite a Realizar</h1>
                    </div>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#55595c" />
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Constancia de Estudios</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">Documento oficial que te acredita como estudiante inscrito en el Instituto Tecnologico de Parral.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#55595c" />
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Kardex</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Documento oficial donde te muestra todas las asignaturas del Plan de Estudios correspondiente y la calificacion por semestre.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#55595c" />
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Credencial de Estudiante</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Identificación institucional del(de la) alumno(a) cuando se está inscrito en el ciclo escolar vigente.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" />
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Boleta de Calificaciones</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">Documento oficial donde te muestra todas las asignaturas del Plan de Estudios correspondiente y la calificacion de semestres anteriores individualmente.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                    </div>
                                </div>
                            </div>
                        </div>
    </body>
</html>
