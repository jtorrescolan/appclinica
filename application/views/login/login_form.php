<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Iniciar sesión</title>
        <link rel="icon" type="image/ico" href="<?=IMG.'favicon.ico'?>">
        <link rel="stylesheet" type="text/css" href="<?=CSS.'bootstrap.min.css'?>"/>
        <link rel="stylesheet" type="text/css" href="<?=CSS.'seguridad-sesion.css'?>">
    </head>
    <body>
        <div class="container">
            <div class="contenedor-form">
                <form class="frmLogin" name="frm-IniciarSesion" action="/login" method="POST">
                    <header>
                        <nav class="navbar navbar-default">
                            <i class="icon-logo-panel icon-logo"></i>
                            <label class="link-home"><a class="navbar-brand">Consultorio Medico Dr. Lindo Carlin</a></label>
                        </nav>
                    </header>
                    <div class="content">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="usuario_txt" class="form-control input-group-sm" type="text" placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="password_txt" class="form-control input-group-sm" type="password" placeholder="Contraseña" required>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="contenedor-botones">
                            <button type="submit" class="btn botones">Iniciar sesión</button>
                        </div>
                    </div>
                    <?php if($this->session->flashdata('mensaje')):?>
                            <div class="alert alert-danger alert-dismissable" style="margin-top:10px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Error: </strong>
                                <?=$this->session->flashdata('mensaje')?>
                            </div>
                    <?php endif;?>      
                </form>
            </div>
        </div>
    </body>
</html>
