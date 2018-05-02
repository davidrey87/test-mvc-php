<h1 class="page-header">
    <?php echo $criterio->idcriterio != null ? $criterio->nombre : 'Nuevo criterio'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=criterio">Criterios</a></li>
    <li class="active"><?php echo $criterio->idcriterio != null ? $criterio->nombre : 'Nueva criterio'; ?></li>
</ol>

<form id="frm-criterio" action="<?php echo $criterio->idcriterio != null ? '?c=criterio&a=Editar' : '?c=criterio&a=Guardar'; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idcriterio" value="<?php echo $criterio->idcriterio; ?>" />

    <div class="form-group">
        <label>Nombre criterio</label>
        <input type="text" name="nombre" value="<?php echo $criterio->nombre; ?>" class="form-control" placeholder="Ingrese nombre del criterio" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Descripción del criterio</label>
        <input type="text" name="descripcion" value="<?php echo $criterio->descripcion; ?>" class="form-control" placeholder="Ingrese descripción de la criterio" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Categoria:</label>
        <select class="form-control" name="idcategoria">
            <?php foreach($this->model_categoria->Listar() as $r): ?>
            <option value="<?php echo $r['idcategoria'];?>" <?php if($criterio->idcategoria==$r['idcategoria']) echo 'selected="selected"'; ?>><?php echo $r['nombre']; ?>: <?php echo $r['descripcion']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
    
</form>

<script>
$(document).ready(function(){
        jQuery("#frm-criterio").submit(function(e){
            return $(this).validate();
        });
});
</script>