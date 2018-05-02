<h1 class="page-header">
    <?php echo 'Configurar '.$metodologia->nombre;?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li><a href="?c=metodologia">Metodologias</a></li>
    <li class="active"><?php echo 'Configurar '.$metodologia->nombre;?></li>
</ol>

<div >
<?php foreach($this->model_categoria->Listar() as $categoria): ?>
    <div>
		<h4><?php echo $categoria['nombre']; ?>: <?php echo $categoria['descripcion']; ?></h4>
                
        <?php foreach($this->model_criterio->Obtener_x_Categoria($categoria['idcategoria']) as $criterio): ?>
        <div class="form-check">
			<label>
				<input <?php if($this->model_metodologia_criterio->Obtener($metodologia->idmetodologia,$criterio['idcriterio']) != null) echo 'checked'; ?> type="checkbox" onclick="return OptionSelected(this)" value="<?php echo $criterio['idcriterio'].','.$metodologia->idmetodologia; ?>"> <span class="label-text"><?php echo $criterio['nombre'].': '.$criterio['descripcion']; ?></span>
			</label>
		</div>
        <?php endforeach; ?>
	</div>
<?php endforeach; ?>
</div>

<script>
function OptionSelected(parametro){
    var value = parametro.value;
    var valueArray = value.split(",");
    var idcriterio = valueArray[0];
    var idmetodologia = valueArray[1];
    if(parametro.checked){
        $.ajax({
            type: 'POST',
            url: 'index.php?c=metodologia_criterio&a=Guardar',
            data: { 'idcriterio': idcriterio, 'idmetodologia': idmetodologia },
            dataType: 'text',
            success: function(result) {
            }
        });
    }else{
        $.ajax({
            type: 'POST',
            url: 'index.php?c=metodologia_criterio&a=Eliminar',
            data: { 'idcriterio': idcriterio, 'idmetodologia': idmetodologia },
            dataType: 'text',
            success: function(result) {
            }
        });
    }
}
</script>