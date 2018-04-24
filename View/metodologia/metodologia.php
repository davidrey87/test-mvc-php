<h1 class="page-header">Metodologias</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li class="active">Metodologias</li>
    <li><a href="?c=metodologia&a=Nuevo">Nueva Metodologia</a></li>
</ol>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:30px;">ID</th>
            <th style="width:70px;">Nombre</th>
            <th style="width:600px;">Descripción</th>
            <th style="width:200px;">URL</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idmetodologia']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $r['url']; ?></td>
            <td>
                <a onclick="$.redirect('index.php?c=metodologia&a=obtener',{idmetodologia: '<?php echo $r['idmetodologia'];?>', x: 'configurar'});"  href="#">Configurar<a/>
            </td>
            <td>
                <a onclick="$.redirect('index.php?c=metodologia&a=obtener',{idmetodologia: '<?php echo $r['idmetodologia'];?>', x: 'editar'});"  href="#">Editar<a/>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=metodologia&a=Eliminar&idmetodologia=<?php echo $r['idmetodologia']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>