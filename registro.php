<?php

    include("conn_db.php");

    if ($conex) {
        echo "todo correcto";
    }

    if (isset($_POST['email'])) {
        if (strlen($_POST['email']) >= 1) {
            $email = trim($_POST['email']);
            $fechareg = date("d/m/y");
            $consulta = "INSERT INTO elist(email, fecha_reg) VALUES ('$email','$fechareg')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3 class="ok"> inscrito cabron </h3>
                <?php
            } else {
                ?>
                <h3 class="bad"> error </3>
                <?php
            } 
        }  else{
            ?>
            <h3 class="bad"> completa </3>
            <?php
        }

    }

?>