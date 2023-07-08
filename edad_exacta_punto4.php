<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad_exacta_punto4.css">
    <title>Registro de Edad</title>
</head>

<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>

    <div class="main-frame-cal">
        <!--falta action y method-->
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Por Favor Seleccione su Fecha de Nacimiento:</label>
                <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
            </div>
            <!--falta type-->
            <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
        </form>

        <?php
        const constante_18 = 18;
        const constante0 = 0;

        if (isset($_POST['verificar'])) {
            $f_n = new DateTime($_POST['f_n']);

            $date2 = new DateTime(date("y-m-d"));

            $diff = $f_n->diff($date2);

            $edad_actual = $diff->y;
            $edad_meses = $diff->m;
            $edad_dias = $diff->d;



            if ($edad_actual >= constante_18) {
                echo "<h1>Es mayor de edad, debido que tiene " . $edad_actual . " años </h1>";
            } else if ($edad_actual > constante_18 && $edad_actual > constante0) {
                echo "<h2>Es menor de edad, debido que tiene " . $edad_actual . " años </h2>";
            } else {
                echo "<h2>No valido</h2>";
            }

            echo "<br>años: " . $edad_actual . " <br>meses: " . $edad_meses . "<br> dias: " . $edad_dias;

        }

        ?>

    </div>
</body>

</html>