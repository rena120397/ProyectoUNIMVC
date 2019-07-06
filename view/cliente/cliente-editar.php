<!-- cliente-editar.php -->
<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->ruc : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Cliente">Clientes</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->ruc : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
	<div class="form-group">
        <label>Ruc</label>
        <input type="text" name="ruc" value="<?php echo $alm->ruc; ?>" class="form-control" placeholder="Ingrese su ruc" data-validacion-tipo="requerido|min:3" />
    </div>
    
	<div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div> 
	<hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    });
</script>