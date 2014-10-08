<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Usuario<small><i class="glyphicon glyphicon-chevron-right"></i> agregar usuario</small></h2>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<?php if($this->session->flashdata('mensaje_s')):?>
			<div class="alert alert-success alert-dismissable" style="margin-top:10px">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	            <strong><?=$this->session->flashdata('mensaje_s')?></strong>
	        </div>
	    <?php elseif($this->session->flashdata('mensaje_a')):?>
	        <div class="alert alert-warning alert-dismissable" style="margin-top:10px">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	            <strong><?=$this->session->flashdata('mensaje_a')?></strong>
	        </div>
	    <?php endif;?>
	</div>
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default padre-popover">
			<div class="panel-heading"><h3 class="panel-title">Agregar usuario</h3></div>
			<form class="form-horizontal" role="form" id="frm-usuario" action="/guardar-usuario" method="POST">
				<div class="panel-body">
					<input type="hidden" name="hdnusuarioid" value="<?=@$usuario->usuarioid?>">
					<div class="form-group input-group-sm">
						<label class="col-sm-3 control-label">Usuario</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="txtusuario" value="<?=@$usuario->usuario?>">
						</div>
					</div>
					<div class="form-group input-group-sm">
						<label class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="txtcontrasenia" value="<?=@$this->encrypt->decode($usuario->contrasenia);?>">
						</div>
					</div>
					<div class="form-group input-group-sm">
						<label class="col-sm-3 control-label">Tipo usuario</label>
						<div class="col-sm-9">
							<input type="hidden" name="hdntipousuario" value="<?=@$usuario->tipousuario?>">
							<select class="form-control" name="list_tipousuario">
								<option selected value>Elegir tipo de usuario...</option>
								<option value="administrador">Administrador</option>
								<option value="medico">Medico</option>
								<option value="secretaria">Secretaria</option>
							</select>
						</div>
					</div>
				</div>
				<div class="panel-footer" style="background-color: white">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<div class="contenedor-botones">
								<button type="submit" class="btn botones">Guardar</button>
								<?php if(@$usuario->usuarioid==NULL):?>
									<button type="reset" class="btn botones">Limpiar</button>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>