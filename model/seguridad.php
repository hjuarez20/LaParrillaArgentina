<?php
/*     
	Descripcion:   
		Codigo de seguridad que verifica que el usuario esta activo. 
*/
 include ("../controller/conUser.php");
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'YES' && isset($_SESSION['idUser']))  )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="../view/login.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
<?php
}
?>