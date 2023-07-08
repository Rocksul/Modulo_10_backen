<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/method_get_punto3.css">
    <title>Mayor o menor de edad</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main-frame-cal">
        <!--METODO GET-->
        <form action="" method="GET">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"
                    placeholder="Por Favor Digite su Nombre">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1"
                    placeholder="Por Favor Digite su Apellido">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cédula</label>
                <input type="text" name="cc" class="form-control" id="exampleFormControlInput1"
                    placeholder="Por Favor Digite su Cédula">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
        </form>

        <?php

        $edad = 0;
        if (isset($_GET['verificar'])) {
            $nombre = $_GET['nombre'];
            //get_añadido//
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cc'];

            echo "El Nombre Registrado es : " . $nombre . "<br>";
            echo "El Apellido Registrado es : " . $apellido . "<br>";
            echo " El Numero de Cédula Registrado es : " . $cedula . "<br>";

        }

        ?>

    </div>
</body>

</html>