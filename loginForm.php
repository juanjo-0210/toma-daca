<?php


class loginForm {

    function formLogin () {
        echo '    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicio de sesion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="validarUser.php" method="post" class="row center">
                                    
                                    <label for="usuario">Usuario:</label>
                                    <input type="text" name="usuario" id="" class="col-6"/><tr>
                                    <label for="pass">Contraseña:</label>
                                    <input type="password" name="pass" id="" class="col-6"/>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="btn btn-primary" style="max-width:80px">Enviar</button>
    
                                </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>';
    }

    function formSignIn () {
        echo '    <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicio de sesion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="signin.php" method="post">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id=""/>
            
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id=""/>
            
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellido" id=""/>
            
                    <label for="email">Correo Electronico:</label>
                    <input type="email" name="email" id=""/>
            
                    <label for="edad">Telefono:</label>
                    <input type="text" name="telefono" id="">
            
                    <label for="postal">Contrasena:</label>
                    <input type="password" name="pass" id="" >
                    
                    <button type="submit">Registrase</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>';
    }


}