<h1 class="page-header">Resultados</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=test">Test</a></li>
    <li class="active">Resultados</li>
</ol>

<div>
    <div>Resultado</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width:70px;">Nombre</th>
                <th style="width:600px;">Descripción</th>
                <th style="width:200px;">URL</th>
                <th style="width:200px;">Criterios</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Obtener($this->model->criterios) as $r): ?>
            <tr>
                <td><?php echo $r['nombre']; ?></td>
                <td><?php echo $r['descripcion']; ?></td>
                <td><?php echo $r['url']; ?></td>
                <td><?php echo $r['criterios']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
