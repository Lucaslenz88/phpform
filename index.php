<?php require "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <script src="JS/control.js"></script>
    
</head>
<body>
    <h2>Ingreso al sistema</h2>
    <div style="width: 20%" >
        <form action="">     
                <label for="usuario">Usuario:</label>
                <input type="text" name="u_name" id="usuario" style="float: right;">
                <br>    
                <br>        
                <label for="clave">Clave:</label>
                <input type="password" name="u_pass" id="clave" style="float: right;">
                <br>
                <br>
                <br>                             
                <input name="u_login" value="Ingresar" onclick="validarCuadros()" type="submit">       
        </form>
    </div>

    <?php

    if( isset( $_POST["u_login"] ) ){
        $u_name = $_POST["u_name"];
        $u_pass = md5($_POST["u_pass"]);

        $sql = "SELECT * FROM users WHERE u_name='$u_name'"; 
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0) {
            while ($user = mysqli_fetch_assoc($result)){
                if ($u_name == $user['u_name'] && $u_pass == $user['u_pass']){
                    header("Location: dash.php");
                }
                else{
                    //echo "<script> alert('Error: usuario o contraseña incorrectos');</script>";
                    echo "Hola";
                }
            }

        } else {
            echo "<script>alert('El usuario no existe');</script>";

        }


    }


    ?>

</body>
</html>