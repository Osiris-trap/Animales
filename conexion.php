

    <?php
        function conexion(){
            $servidor = 'localhost';//127.0.0.1 loopback
            $usuario = 'root'; //por defecto esta root
            $password = ''; //por defecto no exite password
            $base = 'webconexion1';
            $puerto = 3306;

            $conexion = mysqli_connect(
                $servidor,
                $usuario,
                $password,
                $base,
                $puerto
            );
            return $conexion;
              
        }

        

    
    ?>