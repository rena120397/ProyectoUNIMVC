<!-- cliente.php -->
<h1 class="page-header">Clientes</h1>
<div class="well well-sm text-right">
    <a class="btn btn-danger" href="principal.php">Regresar al Menu</a>
    <a class="btn btn-success" href="?c=Cliente&a=Crud">Nuevo cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ruc</th>
            <th style="width:180px;">nombre</th>
            <th style="width:60px;"> Editar </th>
            <th style="width:60px;"> Eliminar </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->ruc; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td>
                <a href="?c=Cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
				href="?c=Cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 