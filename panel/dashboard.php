<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PelisPlox</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="shortcut icon" href="../upload/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>

<body class="Home">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PelisPlox</a>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="form_registrar.php" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>Nuevo
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <legend style="color: white;">Listado de peliculas</legend>
                    <table class="table table" style="color: white;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Genero</th>
                                <th>Descripcion</th>
                                <th>Puntuacion</th>
                                <th>Trailer</th>
                                <th class="text-center">Imagen</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            require '../vendor/autoload.php';
                            $pelicula = new Kawschool\Pelicula;
                            $info_pelicula = $pelicula->mostrar();
                            $cantidad = count($info_pelicula);
                            if ($cantidad > 0) {
                                $c = 0;
                                for ($i = 0; $i < $cantidad; $i++) {
                                    $c++;
                                    $item = $info_pelicula[$i];
                            ?>

                                    <tr>
                                        <td><?php print $c?></td>
                                        <td><?php print $item['Titulo']?></td>
                                        <td><?php print $item['Genero']?></td>
                                        <td><?php print $item['Descripcion']?></td>
                                        <td><?php print $item['Puntuacion']?></td>
                                        <td><?php print $item['Trailer']?></td>
                                        <td class="text-center">
                                            <?php
                                            $foto = '../upload/'.$item['Imagen'];
                                            if(file_exists($foto)){
                                            ?>
                                             <img src="<?php print $foto; ?>" width="50">
                                            <?php }else{?>
                                                NO IMAGE
                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <a href="acciones.php?id=<?php print $item['id']?>" class="btn btn-danger btn-sm">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                            <a href="form_actualizar.php?id=<?php print $item['id'] ?>" class="btn btn-info btn-sm">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                        </td>
                                    </tr>

                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="7">NO HAY REGISTROS</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>