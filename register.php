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
    <h2>Registrar</h2>
    <div style="width: 20%" >
        <form action="" method="POST">     
            <label for="usuario">Usuario:</label>
            <input type="text" name="u_name" id="usuario" style="float: right;">
            <br>    
            <br>   
            <label for="mail">Mail:</label>
            <input type="text" name="u_email" id="mail" style="float: right;">     
            <br>    
            <br>
            <label for="clave">Clave:</label>
            <input type="password" name="u_pass" id="clave" style="float: right;">
            <br>
            <br>
            <br>                             
            <input value="Registrarse" name="u_reg" onclick="validarCuadros()" type="submit"> 
            <a href="index.php">Login</a>
        </form>
    </div>

    <?php

    if( isset( $_POST["u_reg"] ) ){
        $u_email = $_POST["u_email"];
        $u_name = $_POST["u_name"];
        $u_pass = md5($_POST["u_pass"]);

        $sql = "INSERT INTO users (u_email, u_name, u_pass) VALUES ('$u_email', '$u_name', '$u_pass' )";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Te registraste exitosamente');</script>";
        } else {
            echo "Error: ".$sql . "<br>" . mysqli_error($conn);
        }


    }


    ?>

</body>
</html>