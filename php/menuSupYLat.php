
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                echo '<a class="navbar-brand">Editor de Escenarios de ' . $_SESSION["username"] . '</a>';
            ?>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <?php
                if( $_SESSION['seccion'] == "misSalas" || $_SESSION['seccion'] == "editarSala" ){
                    echo "<button class=\"btn btn-primary btn-lg\" id=\"botonNuevoEscenario\" onClick=\"LoadNuevoEscenario()\"> 
                        Añadir Nueva Sala
                        </button>";
                }
                else if( $_SESSION['seccion'] == "editor" ){
                    echo "<button class=\"btn btn-warning btn-lg\" id=\"botonNuevoExportar\" data-toggle=\"modal\" data-target=\"#myModalForm\" onClick=\"LoadExportar()\" disabled> 
                        Exportar Escenario
                        </button>";
                }
                else if( $_SESSION['seccion'] == "misEsculturas" || $_SESSION['seccion'] == "editarEscultura" ){
                    echo "<button class=\"btn btn-primary btn-lg\" id=\"botonNuevaEscultura\" onClick=\"LoadNuevaEscultura()\"> 
                        Añadir Nueva Escultura
                        </button>";
                }
                else if( $_SESSION['seccion'] == "misCuadros" || $_SESSION['seccion'] == "editarCuadro"){
                    echo "<button class=\"btn btn-primary btn-lg\" id=\"botonNuevoCuadro\" onClick=\"LoadNuevoCuadro()\"> 
                        Añadir Nuevo Cuadro
                        </button>";
                }
                else if( $_SESSION['seccion'] == "exportarEscenario" ){
                    echo "<button class=\"btn btn-primary btn-lg\" id=\"botonNuevoCuadro\" onClick=\"backIndex()\"> 
                        Volver a Editor
                        </button>";
                }
            ?>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
           <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <?php
                    echo    '<li><a href="#"><i class="fa fa-user fa-fw"></i>' . $_SESSION["username"] . '</a>
                            </li>'
                    ?>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="./logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li> 
                        <?php
                            if( $_SESSION['seccion'] != "editor" )
                                echo '<a href="../editor.php"><i class="fa fa-pencil fa-fw"></i> Editor de Escenarios</a>';
                            else
                                echo '<a href="./editor.php"><i class="fa fa-pencil fa-fw"></i> Editor de Escenarios</a>';
                        ?>
                        
                    </li>
                    <li>
                        <?php
                            if( $_SESSION['seccion'] == "editor" )
                                echo '<a href="./php/opciones.php?seccion=misEscenarios"><i class="fa fa-institution fa-fw"></i> Mis Escenarios</a>';
                            else
                                echo '<a href="./opciones.php?seccion=misEscenarios"><i class="fa fa-institution fa-fw"></i> Mis Escenarios</a>';
                        ?>
                       
                    </li>
                    <li>
                        <?php
                            if( $_SESSION['seccion'] == "editor" )
                                echo '<a href="./php/opciones.php?seccion=misSalas"><i class="fa fa-home fa-fw"></i> Salas</a>';
                            else
                                echo '<a href="./opciones.php?seccion=misSalas"><i class="fa fa-home fa-fw"></i> Salas</a>';
                        ?>
                    </li>
                    <li>
                        <?php
                            if( $_SESSION['seccion'] == "editor" )
                                echo '<a href="./php/opciones.php?seccion=misEsculturas"><i class="fa fa-qq fa-fw"></i> Esculturas</a>';
                            else
                                echo '<a href="./opciones.php?seccion=misEsculturas"><i class="fa fa-qq fa-fw"></i> Esculturas</a>';
                        ?>

                    </li>
                    <li>
                        <?php
                            if( $_SESSION['seccion'] == "editor" )
                                echo '<a href="./php/opciones.php?seccion=misCuadros"><i class="fa fa-picture-o fa-fw"></i> Cuadros</a>';
                            else
                                echo '<a href="./opciones.php?seccion=misCuadros"><i class="fa fa-picture-o fa-fw"></i> Cuadros</a>';
                        ?>
                    </li>
                    <!--<li>
                        <a href="forms.html"><i class="fa fa-rebel fa-fw"></i> Otros Objetos</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>