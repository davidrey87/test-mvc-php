<h1 class="page-header">Categorias</h1>

<table class="table">
    <a href="?c=categoria&a=Nuevo" class="btn btn-primary btn-sm pull-right"><b>+</b> Nueva Categoria</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PREGUNTA</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idcategoria']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $r['pregunta']; ?></td>
            <td class="text-center">
                <div class = "row">
                    <a onclick="$.redirect('index.php?c=categoria&a=obtener',{idcategoria: '<?php echo $r['idcategoria'];?>'});" class='btn btn-warning btn-xs' href="#">
                        <span class="glyphicon glyphicon-edit"></span> 
                    </a> 
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=categoria&a=Eliminar&idcategoria=<?php echo $r['idcategoria']; ?>" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span> 
                    </a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>