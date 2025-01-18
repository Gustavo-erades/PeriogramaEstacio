<div id="alert"></div>
<form id="formularioNovo">
<div class="text-center" id="saudegeral">
    <h3 class="display-6 mb-3 d-inline text-light">
        <b>Saúde Geral</b>
    </h3>
     <?= $this->element('saudeGeralNovo'); ?>
</div>

<div class="text-center" id="questionario">
    <h3 class="display-6 mb-3 d-inline text-light">
        <b>Questionário Odontológico</b>
    </h3>
     <?= $this->element('questOdontoNovo'); ?>
</div>

<div class="text-center" id="questionario">
    <h3 class="display-6 mb-3 d-inline text-light">
        <b>Diagnóstico e Observações</b>
    </h3>
     <?= $this->element('diagnosticoeobs'); ?>
</div>
</form>
<button class="mb-5 button-43" role="button"  onclick="enviaProntuario()">Salvar</button>