<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="utf-8">
        <title><?=@$titulo?></title>
        <link rel="icon" type="image/ico" href="<?=IMG.'favicon.ico'?>">
        <link rel="stylesheet" type="text/css" href="<?=CSS.'bootstrap.min.css'?>"/>
        <link rel="stylesheet" type="text/css" href="<?=CSS.'style.css'?>">
        <link rel="stylesheet" type="text/css" href="<?=CSS.'plugins/dataTables.bootstrap.css'?>">
        <link rel="stylesheet" type="text/css" href="<?=CSS.'plugins/fullcalendar.css'?>">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <i class="icon-logo-panel icon-logo"></i>
                        <label class="link-home"><a class="navbar-brand" href="/home">Consultorio Medico Dr. Lindo Carlin</a></label>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata['usuario']?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--<li><a href="#">Perfil de usuario</a></li>-->
                                <!--<li><a href="#">Configuración</a></li>-->
                                <li class="divider"></li>
                                <li><a href="/logout">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="wrapper">
            <div class="side">
                <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <li class="cabecera-li">
                            <a href="/home">
                                <i class="glyphicon glyphicon-home"></i>
                                <span class="cabecera">Inicio</span>
                            </a>
                        </li>
                        <li class="cabecera-li">
                            <a data-toggle="collapse" href="#paciente">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="cabecera">Paciente</span>
                                <i class="glyphicon glyphicon-chevron-down" style="left:122px;"></i>
                            </a>
                            <ul id="paciente" class="nav nav-pills nav-stacked collapse submenu">
                                <?php if($this->session->userdata['tipousuario']=='administrador' || $this->session->userdata['tipousuario']=='secretaria'):?>
                                    <li><a href="/agregar-paciente">Agregar paciente</a></li>
                                <?php endif;?>
                                <li><a href="/listar-paciente">Listar Paciente</a></li>
                            </ul>
                        </li>
                        <li class="cabecera-li">
                            <a data-toggle="collapse" href="#medico">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="cabecera">Médico</span>
                                <i class="glyphicon glyphicon-chevron-down" style="left:133px;"></i>
                            </a>
                            <ul id="medico" class="nav nav-pills nav-stacked collapse submenu">
                                <?php if($this->session->userdata['tipousuario']=='administrador'):?>
                                    <li><a href="/agregar-medico">Agregar medico</a></li>
                                <?php endif;?>
                                <li><a href="/listar-medico">Lista de medicos</a></li>
                            </ul>
                        </li>
                        <li class="cabecera-li">
                            <a data-toggle="collapse" href="#secretaria">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="cabecera">Secretaria</span>
                                <i class="glyphicon glyphicon-chevron-down" style="left:113px;"></i>
                            </a>
                            <ul id="secretaria" class="nav nav-pills nav-stacked collapse submenu">
                                <?php if($this->session->userdata['tipousuario']=='administrador'):?>
                                    <li><a href="/agregar-secretaria">Agregar secretaria</a></li>
                                <?php endif;?>
                                <li><a href="/listar-secretaria">Lista de secretarias</a></li>
                            </ul>
                        </li>
                        <?php if($this->session->userdata['tipousuario']=='administrador' || $this->session->userdata['tipousuario']=='secretaria'):?>
                            <li class="cabecera-li">
                                <a data-toggle="collapse" href="#cita">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                    <span class="cabecera">Cita</span>
                                    <i class="glyphicon glyphicon-chevron-down" style="left:153px;"></i>
                                </a>
                                <ul id="cita" class="nav nav-pills nav-stacked collapse submenu">
                                    <li><a href="/calendario-citas">Calendario de citas</a></li>
                                </ul>
                            </li>
                        <?php endif?>
                        <?php if($this->session->userdata['tipousuario']=='administrador'):?>
                            <li class="cabecera-li">
                                <a data-toggle="collapse" href="#sistema">
                                    <i class="glyphicon glyphicon-cog"></i>
                                    <span class="cabecera">Sistema</span>
                                    <i class="glyphicon glyphicon-chevron-down" style="left:129px;"></i>
                                </a>
                                <ul id="sistema" class="nav nav-pills nav-stacked collapse submenu">
                                    <li><a href="/agregar-usuario">Agregar usuario</a></li>
                                    <li><a href="/listado-usuario">Lista de usuario</a></li>
                                </ul>
                            </li>
                        <?php endif;?>
                        <!--<li class="cabecera-li">
                            <a href="">
                                <i class="glyphicon glyphicon-list-alt"></i>
                                <span class="cabecera">Reporte</span>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
            <div class="content">
                <?=@$contenido?>
            </div>
        </div>
        <script type="text/javascript" src="<?=JS.'jquery-1.10.2.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'bootstrap.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery-ui-1.10.4.custom.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery.fileupload.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery.fileupload-process.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery.fileupload-validate.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/typeahead.bundle.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery.dataTables.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/dataTables.bootstrap.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/fullcalendar.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/jquery.validate.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'plugins/spin.min.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'appclinica.js'?>"></script>
        <script type="text/javascript" src="<?=JS.'validaciones.js'?>"></script>
    </body>
</html>