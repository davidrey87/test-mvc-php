<h1 class="page-header">Test</h1>

<ol class="breadcrumb">
    <li><a href="?c=administrador">Principal</a></li>
    <li class="active">Test</li>
</ol>

<div>
    <div>Test</div>
    <?php foreach($this->model_categoria->Listar() as $categoria): ?>
    <div><?php echo $categoria['pregunta']; ?></div>
        <?php foreach($this->model_criterio->Obtener_x_Categoria($categoria['idcategoria']) as $criterio): ?>
            <div class="form-check">
				<label>
					<input type="checkbox" onclick="return OptionSelected(this)" value="<?php echo $criterio['idcriterio']; ?>"> <span class="label-text"><?php echo $criterio['nombre'].': '.$criterio['descripcion']; ?></span>
				</label>
			</div>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <form id="frm-metodologia" action="?c=test&a=Resultado" method="post" enctype="multipart/form-data">
        <input type="hidden" name="criterios" value=""/>
        <div class="text-right">
            <button class="btn btn-success">Enviar</button>
        </div>
    </form>

</div>

<script>
function OptionSelected(parametro){
    var valor = parametro.value;
    var valores = $('input[name="criterios"]').val();
    if(parametro.checked){
        if(!valores){
            $('input[name="criterios"]').val(valor);
        }else{
            $('input[name="criterios"]').val(valor+','+valores);
        }
    }else{
        $('input[name="criterios"]').val($('input[name="criterios"]').val().replace(valor+',',""));
    }

}
</script>