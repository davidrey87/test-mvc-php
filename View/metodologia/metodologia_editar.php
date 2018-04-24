<h1 class="page-header">
    <?php echo $metodologia->idmetodologia != null ? $metodologia->nombre : 'Nueva Metodologia'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=metodologia">Metodologias</a></li>
    <li class="active"><?php echo $metodologia->idmetodologia != null ? $metodologia->nombre : 'Nueva Metodologia'; ?></li>
</ol>

<form id="frm-metodologia" action="<?php echo $metodologia->idmetodologia != null ? '?c=metodologia&a=Editar' : '?c=metodologia&a=Guardar'; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idmetodologia" value="<?php echo $metodologia->idmetodologia; ?>" />

    <div class="form-group">
        <label>Nombre Metodologia</label>
        <input type="text" name="nombre" value="<?php echo $metodologia->nombre; ?>" class="form-control" placeholder="Ingrese nombre de la Metodologia" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Descripción de la Metodologia</label>
        <input type="text" name="descripcion" value="<?php echo $metodologia->descripcion; ?>" class="form-control" placeholder="Ingrese descripción de la Metodologia" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>URL</label>
        <input type="text" name="url" value="<?php echo $metodologia->url; ?>" class="form-control" placeholder="Ingrese URL de la Metodologia" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
    
</form>

<script>
$(document).ready(function(){
        jQuery("#frm-metodologia").submit(function(e){
            return $(this).validate();
        });
});
</script>