<h1 class="page-header">
    <?php echo $categoria->idcategoria != null ? $categoria->nombre : 'Nueva categoria'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=categoria">Categorias</a></li>
    <li class="active"><?php echo $categoria->idcategoria != null ? $categoria->nombre : 'Nueva categoria'; ?></li>
</ol>

<form id="frm-categoria" action="<?php echo $categoria->idcategoria != null ? '?c=categoria&a=Editar' : '?c=categoria&a=Guardar'; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcategoria" value="<?php echo $categoria->idcategoria; ?>" />

    <div class="form-group">
        <label>Nombre categoria</label>
        <input type="text" name="nombre" value="<?php echo $categoria->nombre; ?>" class="form-control" placeholder="Ingrese nombre del categoria" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Descripción del categoria</label>
        <input type="text" name="descripcion" value="<?php echo $categoria->descripcion; ?>" class="form-control" placeholder="Ingrese descripción de la categoria" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Pregunta</label>
        <input type="text" name="pregunta" value="<?php echo $categoria->pregunta; ?>" class="form-control" placeholder="Ingrese una pregunta para la categoria" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
    
</form>

<script>
$(document).ready(function(){
        jQuery("#frm-categoria").submit(function(e){
            return $(this).validate();
        });
});
</script>