
<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    $_SESSION["seccion"] = $_GET["seccion"];
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>TFG</title>

    <!-- CSS -->
    <!--<link href="./css/style.css" rel="stylesheet" type='text/css' /> -->

    <script  type="text/javascript" src="../scripts/createJSONScene.js"></script>
    <script  type="text/javascript" src="../scripts/redireccionar/redireccionarExportar.js"></script>
    <script  type="text/javascript" src="../scripts/redireccionar/redireccionarMostrar.js"></script>
    <script  type="text/javascript" src="../scripts/cargarMiEscenario.js"></script>
    <script  type="text/javascript" src="../scripts/eliminarDatos.js"></script>
    <script  type="text/javascript" src="../scripts/editarDatos.js"></script>
    <script  type="text/javascript" src="../scripts/updateInfoEscultura.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">

        <?php
            //$_SESSION["seccion"] = "nuevoEscenario";
            //$_SESSION["username"] = "Vicente";
            include('menuSupYLat.php');
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">

            <?php
            	if( $_SESSION["seccion"] == "nuevoEscenario" )
                	include('addNuevaSala.php');
                else if( $_SESSION["seccion"] == "nuevaEscultura" )
                	include('addNuevaEscultura.php');
                else if( $_SESSION["seccion"] == "nuevoCuadro" )
                	include('addNuevoCuadro.php');
                else if( $_SESSION["seccion"] == "exportarEscenario" )
                    include('exportarEscenario.php');
                else if( $_SESSION["seccion"] == "misEscenarios" )
                    include('misEscenarios.php');
                else if( $_SESSION["seccion"] == "misEsculturas" )
                    include('misEsculturas.php');
                else if( $_SESSION["seccion"] == "misCuadros" )
                    include('misCuadros.php');
                else if( $_SESSION["seccion"] == "misSalas" )
                    include('misSalas.php');
                else if( $_SESSION["seccion"] == "editarEscultura" )
                    include('editarEscultura.php');
                else if( $_SESSION["seccion"] == "editarSala" )
                    include('editarSala.php');
                else if( $_SESSION["seccion"] == "editarCuadro" )
                    include('editarCuadro.php');
            ?>
      
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Frame auxiliar para la redireccion de formularios -->
    <iframe name="form_aux_frame" width="1" height="1" style="border:none"></iframe>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
