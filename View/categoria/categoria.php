<h1 class="page-header">Categorias</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li class="active">Categorias</li>
    <li><a href="?c=categoria&a=Nuevo">Nuevo Categoria</a></li>
</ol>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:30px;">ID</th>
            <th style="width:70px;">Nombre</th>
            <th style="width:500px;">Descripción</th>
            <th style="width:300px;">Pregunta</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r['idcategoria']; ?></td>
            <td><?php echo $r['nombre']; ?></td>
            <td><?php echo $r['descripcion']; ?></td>
            <td><?php echo $r['pregunta']; ?></td>
            <td>
                <a onclick="$.redirect('index.php?c=categoria&a=obtener',{idcategoria: '<?php echo $r['idcategoria'];?>'});"  href="#">Editar<a/>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=categoria&a=Eliminar&idcategoria=<?php echo $r['idcategoria']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>