<h1 class="page-header">Criterios</h1>
<!--
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=metodologia&a=nuevo">Nueva Metodologia</a>
    <a class="btn btn-primary" href="?c=criterio&a=nuevo">Nuevo Criterio</a>
</div>
-->
<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li class="active">Criterios</li>
    <li><a href="?c=criterio&a=Nuevo">Nuevo Criterio</a></li>
</ol>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:30px;">ID</th>
            <th style="width:200px;">Nombre</th>
            <th style="width:450px;">Descripción</th>
            <th style="width:120px;">Categoria</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idcriterio']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $this->model_categoria->ObtenerNombre($r['idcategoria']); ?></td>
            <td>
                <a onclick="$.redirect('index.php?c=criterio&a=obtener',{idcriterio: '<?php echo $r['idcriterio'];?>'});"  href="#">Editar<a/>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=criterio&a=Eliminar&idcriterio=<?php echo $r['idcriterio']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>