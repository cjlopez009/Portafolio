<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EJEMPLO MVC-CRUD</title>

    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>

    <!-- LOGOTIPO -->

        <div class="container-fluid">

            <h3 class="text-center py-3">LOGO</h3>
        </div>
    
    <!-- BOTONERA -->

        <div class="container-fluid bg-light">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">

                

                    <!-- $_GET["VARIABLE"]: es una variable que se pasa como parametro Via URL (tambien conocido como cadena de consulta a
                    traves de la URL)

                        Cuando es la prirmera variable se separa con (?)
                        las que siguen a continuacion se separan con ($)  -->

                    <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=registro">Registro</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=ingreso">Ingreso</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active " href="index.php?pagina=inicio">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="index.php?pagina=salir">Salir</a>
                     </li>

                </ul>
            </div>
        </div>

        <!-- CONTENIDO -->

        <div class="container-fluid">

            <div class="container py-4">

                <?php

                    // #ISSET: isset() Determina si una variable esta definida y no es NULL

                    if (isset($_GET["pagina"])){

                        if($_GET["pagina"] == "registro" ||
                           $_GET["pagina"] == "ingreso" ||
                            $_GET["pagina"] == "inicio" ||
                            $_GET["pagina"] == "salir"){

                                include "views/pages/".$_GET["pagina"].".php";

                            }
                        }else{
                                include "views/pages/registro.php";
                            }

                ?>

             </div>
        </div>
</body>
</html>