<!-- producto.php -->
<h1 class="page-header">Ventas</h1>
<div class="well well-sm text-right">
    <a class="btn btn-danger" href="principal.php">Regresar al Menu</a>
    <a class="btn btn-warning" href="?c=Venta&a=pdf">Imprimir PDF</a>
    <a class="btn btn-info" href="?c=Venta&a=histograma">Reporte Grafico</a>
    <a class="btn btn-success" href="?c=Venta&a=Crud">Nueva Venta</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">id_cliente</th>
            <th style="width:180px;">id_producto</th>
            <th style="width:180px;">cantidad</th>
            <th style="width:180px;">importe</th>
            <th style="width:180px;">fregistro</th>
            <th style="width:60px;"> Editar </th>
            <th style="width:60px;"> Eliminar </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_cliente; ?></td>
            <td><?php echo $r->id_producto; ?></td>
            <td><?php echo $r->cantidad; ?></td>
            <td><?php echo $r->importe; ?></td>
            <td><?php echo $r->fregistro; ?></td>
            <td>
                <a href="?c=Venta&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
				href="?c=Venta&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 