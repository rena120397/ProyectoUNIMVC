<!-- venta-editar.php -->
<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->id_cliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Ventas</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->id_cliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-venta" action="?c=Venta&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
	<div class="form-group">
        <label>ID_Cliente</label>
        <input type="text" name="id_cliente" value="<?php echo $alm->id_cliente; ?>" class="form-control" placeholder="Ingrese su id_cliente" />
    </div> 
    <div class="form-group">
        <label>ID_Productp</label>
        <input type="text" name="id_producto" value="<?php echo $alm->id_producto; ?>" class="form-control" placeholder="Ingrese su id_producto" />
    </div>
    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="Ingrese su cantidad" />
    </div>
    <div class="form-group">
        <label>Importe</label>
        <input type="text" name="importe" value="<?php echo $alm->importe; ?>" class="form-control" placeholder="Ingrese su importe" />
    </div>
	<hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-venta").submit(function(){
            return $(this).validate();
        });
    });
</script>