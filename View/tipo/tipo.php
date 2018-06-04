<h1 class="page-header">Tipo</h1>

<table class="table">
    <a href="?c=tipo&a=Nuevo" class="btn btn-primary btn-sm pull-right"><b>+</b> Nuevo Tipo</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idtipo']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td class="text-center">
                <div class = "row">
                    <a onclick="$.redirect('index.php?c=tipo&a=obtener',{idtipo: '<?php echo $r['idtipo'];?>'});" class='btn btn-warning btn-xs' href="#">
                        <span class="glyphicon glyphicon-edit"></span> 
                    </a> 
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=tipo&a=Eliminar&idtipo=<?php echo $r['idtipo']; ?>" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span> 
                    </a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>