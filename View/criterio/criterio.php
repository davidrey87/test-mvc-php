<h1 class="page-header">Criterios</h1>

<table class="table table-striped">
    <a href="?c=criterio&a=Nuevo" class="btn btn-primary btn-sm pull-right"><b>+</b> Nuevo Criterio</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>CATEGORIA</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idcriterio']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $this->model_categoria->ObtenerNombre($r['idcategoria']); ?></td>
            <td class="text-center">
                <div class = "row">
                    <a onclick="$.redirect('index.php?c=criterio&a=obtener',{idcriterio: '<?php echo $r['idcriterio'];?>'});" class='btn btn-warning btn-xs' href="#">
                        <span class="glyphicon glyphicon-edit"></span> 
                    </a> 
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=criterio&a=Eliminar&idcriterio=<?php echo $r['idcriterio']; ?>" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span> 
                    </a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>