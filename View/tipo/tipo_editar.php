<h1 class="page-header">
    <?php echo $tipo->idtipo != null ? $tipo->nombre : 'Nuevo tipo'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=tipo">Tipos</a></li>
    <li class="active"><?php echo $tipo->idtipo != null ? $tipo->nombre : 'Nuevo tipo'; ?></li>
</ol>

<form id="frm-tipo" action="<?php echo $tipo->idtipo != null ? '?c=tipo&a=Editar' : '?c=tipo&a=Guardar'; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idtipo" value="<?php echo $tipo->idtipo; ?>" />

    <div class="form-group">
        <label>Nombre tipo </label>
        <input type="text" name="nombre" value="<?php echo $tipo->nombre; ?>" class="form-control" placeholder="Ingrese nombre del tipo" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Descripción del tipo </label>
        <input type="text" name="descripcion" value="<?php echo $tipo->descripcion; ?>" class="form-control" placeholder="Ingrese descripción de la tipo" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
    
</form>

<script>
$(document).ready(function(){
        jQuery("#frm-tipo").submit(function(e){
            return $(this).validate();
        });
});
</script>