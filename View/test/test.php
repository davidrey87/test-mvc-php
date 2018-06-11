<h1 class="page-header">Cuestionario</h1>
<div>
    <div>
        <p>Lea la pregunta detenidamente y selecciona la o las respuestas que mas se adapten a tu proyecto de software. Según el nivel de certeza de tus respuestas, al final se te hará una recomendación de que metodología puedes utilizar.</p>    
    </div>

    <?php foreach($this->model_categoria->Listar() as $categoria): ?>
    <div>
    <div><?php echo $categoria['pregunta']; ?></div>
        <?php foreach($this->model_criterio->Obtener_x_Categoria($categoria['idcategoria']) as $criterio): ?>
            <div class="checkbox checkbox-primary">
                <input id="checkbox3" class="styled" type="checkbox" onclick="return OptionSelected(this)" value="<?php echo $criterio['idcriterio']; ?>">
                <label>
                    <?php echo $criterio['nombre'].': '.$criterio['descripcion']; ?>
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
        if(valores.split(",").lenght > 0){
            $('input[name="criterios"]').val($('input[name="criterios"]').val().replace(valor+',',""));
        }else{
            $('input[name="criterios"]').val($('input[name="criterios"]').val().replace(valor,""));
        }
    }
}
</script>