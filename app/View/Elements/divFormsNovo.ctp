<div id="alert"></div>
<form id="formularioNovo">
<div class="text-center" id="saudegeral">
    <center><h3 class=" mb-3 d-inline text-dark" style="font-weight:bold">
        <b>Saúde Geral</b>
    </h3></center>
     <?= $this->element('saudeGeralNovo'); ?>
</div>

<div class="text-center" id="questionario">
    <h3 class=" mb-3 d-inline text-dark" style="font-weight:bold">
        <b>Questionário Odontológico</b>
    </h3>
     <?= $this->element('questOdontoNovo'); ?>
</div>

<div class="text-center" id="questionario">
    <h3 class=" mb-3 d-inline text-dark" style="font-weight:bold">
        <b>Diagnóstico e Observações</b>
    </h3>
     <?= $this->element('diagnosticoeobs'); ?>
</div>
</form>
<button class="mb-5 button-43" role="button" id="salvarPronturarioNovo" onclick="enviaProntuario()">Salvar</button>

<script>
    let observacoes='';
    let diagnostico='';
    let tratOdonto='';
    let implante='';
    let sorriso='';
    let doencaContagiosa='';
    let alergia='';
    let bebida='';
    let drogas='';
    let medicamento='';
    let fumar='';
    document.querySelectorAll('.editorOdonto').forEach(function(editorElement) {
        ClassicEditor
            .create(editorElement, {
                toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'bulletedList', 'numberedList', 'blockQuote']
            })
            .then(editor => {
               /* document.getElementById('observacoes').addEventListener('change', function() {
                    observacoes=editor.getData();
                });
                document.getElementById('diagnostico').addEventListener('change', function() {
                    diagnostico=editor.getData();
                });
                document.getElementById('tratOdonto').addEventListener('change', function() {
                    tratOdonto=editor.getData();
                });
                document.getElementById('implante').addEventListener('change', function() {
                    implante=editor.getData();
                });
                document.getElementById('sorriso').addEventListener('change', function() {
                    sorriso=editor.getData();
                });
                document.getElementById('doencaContagiosa').addEventListener('change', function() {
                    doencaContagiosa=editor.getData();
                });
                document.getElementById('alergia').addEventListener('change', function() {
                    alergia=editor.getData();
                });
                document.getElementById('bebida').addEventListener('change', function() {
                    bebida=editor.getData();
                });
                document.getElementById('drogas').addEventListener('change', function() {
                    drogas=editor.getData();
                });
                document.getElementById('medicamento').addEventListener('change', function() {
                    medicamento=editor.getData();
                });
                document.getElementById('fumar').addEventListener('change', function() {
                    fumar=editor.getData();
                });*/
                document.getElementById('salvarPronturarioNovo').addEventListener('click', function() {
                    implante = editor.getData();
                    enviaProntuario()
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>