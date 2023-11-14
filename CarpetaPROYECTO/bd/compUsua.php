<?php
require 'connection.php';

/* validar el login del usuario*/

if(!empty($_POST['user']) && !empty($_POST['pass'])){

    try {

        //code...

        $user=$_POST['user'];

        $pass=$_POST['pass'];

        $query="SELECT * FROM Perfil WHERE Perfil.Usuario='$user' AND  Perfil.Contrasena='$pass'";

        $result=mysqli_query($conn, $query);
        $row=mysqli_num_rows($result);

        if($row >0){

            //guardar en la variable los datos en un vector
            $rowlist = mysqli_fetch_array($result);

            echo '<script language="javascript">alert("Starting...");</script>';

           //abrir session para guardar el id del usuario, es decir del perfil. 
           session_start();

           $_SESSION['id']=$rowlist["Persona_idPersona"];

        

           //redireccionamiento de Pagina principal.
           header("Location: /web2021/menu/main.php");

           /*echo '';*/
        }else{

            echo "No se ha encontrado un registro.";

        }
    } catch (\Throwable $th) {
        //throw $th;
        echo "error.";
    }

    mysqli_free_result($result);
    mysqli_close($conn);

 }
?>