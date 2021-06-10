<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $pagina == 'inicio' ? 'inicio' : '';?>
    <?php echo $pagina == 'nosotros' ? 'nosotros' : '';?>
    <?php echo $pagina == 'contacto' ? 'contacto' : '';?>
    </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <style>body{padding-top: 30px;}</style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="se-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Brand</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li class="<?php echo $pagina == 'inicio' ? 'active' : '';?>"><a href="?p=inicio">Inicio</a></li>
                <li class="<?php echo $pagina == 'nosotros' ? 'active' : '';?>"><a href="?p=nosotros">Nosotros</a></li>
                <li class="<?php echo $pagina == 'contacto' ? 'active' : '';?>"><a href="?p=contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    