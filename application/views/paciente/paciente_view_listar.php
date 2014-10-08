<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Paciente<small><i class="glyphicon glyphicon-chevron-right"></i> lista de pacientes</small></h2>
    </div>
</div>
<div class="row">
    <div class="modal fade" id="modal-eliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarCitas" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Cuadro de diálogo</h4>
                </div>
                <div class="modal-body">¿Está seguro que desea eliminar el registro?</div>
                <div class="modal-footer">
                    <button type="submit" id="si" class="btn btn-primary">Si</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <?php if($this->session->flashdata('mensaje')):?>
            <div class="alert alert-success alert-dismissable" style="margin-top:10px">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><?=$this->session->flashdata('mensaje')?></strong>
            </div>
        <?php elseif($this->session->flashdata('mensaje_a')):?>
            <div class="alert alert-warning alert-dismissable" style="margin-top:10px">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><?=$this->session->flashdata('mensaje_a')?></strong>
            </div>
        <?php endif;?>
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Lista de pacientes</h3></div>
            <div class="panel-body">
                <div class="tabla-lista-paciente">
                    <table class="table table-striped table-bordered table-hover" id="tbl-lista-paciente" width="100%">
                        <thead>
                            <tr>
                                <th width="30%">Nombres y Apellidos</th>
                                <th width="7%">Edad</th>
                                <th width="23%">Domicilio</th>
                                <th width="9%">Teléfono</th>
                                <?php if($this->session->userdata['tipousuario']=='administrador'||$this->session->userdata['tipousuario']=='secretaria'):?>
                                    <th width="7%">Editar</th>
                                <?php endif;?>
                                    <th width="8%">Historia</th>
                                <?php if($this->session->userdata['tipousuario']=='administrador'||$this->session->userdata['tipousuario']=='secretaria'):?>
                                    <th width="8%">Eliminar</th>
                                <?php endif;?>
                                <th width="8%">Reporte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pacientes as $paciente):?>
                                <tr>
                                    <td><?=$paciente->nomcompleto?></td>
                                    <td><?=$paciente->edad?></td>
                                    <td><?=$paciente->domicilio?></td>
                                    <td><?=$paciente->telefono?></td>
                                    <?php if($this->session->userdata['tipousuario']=='administrador'||$this->session->userdata['tipousuario']=='secretaria'):?>
                                        <td><center><a href="/actualizar-paciente/<?=$paciente->pacienteid?>"><i class="glyphicon glyphicon-pencil"></i></a></center></td>
                                    <?php endif;?>
                                    <td><center><a href="/actualizar-historia/<?=$paciente->pacienteid?>"><i class="glyphicon glyphicon-book"></i></a></center></td>
                                    <?php if($this->session->userdata['tipousuario']=='administrador'||$this->session->userdata['tipousuario']=='secretaria'):?>
                                        <td><center><a id=eliminar url="eliminar-paciente/<?=$paciente->pacienteid?>"><i class="glyphicon glyphicon-remove"></i></a></center></td>
                                    <?php endif;?>
                                    <td><center><a target="_blank" href="paciente/paciente/report/<?=$paciente->pacienteid?>"><i class="glyphicon glyphicon-list-alt"></i></a></center></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

