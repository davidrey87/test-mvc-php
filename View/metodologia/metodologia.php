
<h1 class="page-header">Metodologias</h1>

    <!--Bootstrap Table using .table class-->  
    <table class="table">
    <a href="?c=metodologia&a=Nuevo" class="btn btn-primary btn-sm pull-right"><b>+</b> Nueva Metodologia</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>URL</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idmetodologia']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $r['url']; ?></td>
            <td class="text-center">
                <div class = "row">
                    <a onclick="$.redirect('index.php?c=metodologia&a=obtener',{idmetodologia: '<?php echo $r['idmetodologia'];?>', x: 'configurar'});" class='btn btn-info btn-xs' href="#">
                        <span class="glyphicon glyphicon-wrench"></span> 
                    </a> 
                    <a onclick="$.redirect('index.php?c=metodologia&a=obtener',{idmetodologia: '<?php echo $r['idmetodologia'];?>', x: 'editar'});" class='btn btn-warning btn-xs' href="#">
                        <span class="glyphicon glyphicon-edit"></span> 
                    </a> 
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=metodologia&a=Eliminar&idmetodologia=<?php echo $r['idmetodologia']; ?>" href="#" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span> 
                    </a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
          <tbody>
    </table>