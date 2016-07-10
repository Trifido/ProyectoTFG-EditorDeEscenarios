    <?php
        $option = $_SESSION["sessionHead"];

        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"./index.php\">Escenarios VR </a>
        </div>     
        <ul class=\"nav navbar-top-links navbar-right\">";
            
        if( $option == 1 ){
            echo "<button class=\"btn btn-primary btn-lg\" id=\"botonLogin\" onClick=\"LoadLogin()\"> 
                Login
                </button>";
            echo "<button class=\"btn btn-info btn-lg\" id=\"botonRegister\" onClick=\"LoadRegister()\"> 
                Registrar
                </button>";
        }
            
        echo '</ul>  </nav>';

    ?>