<link rel="stylesheet" href="css/novoStyle.css">
<div class="mt-3">
    <h1 class="display-4">Prontuários</h1>
    <h4 class="text-align-right text-light" style="font-weight:bold">
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y');
        ?>
    </h4>
</div>
<div class="mt-3">
    <?= $this->element('divFormsNovo') ?>
    <!-- Botão "De volta ao topo" -->
    <button id="backToTop" class="back-to-top btn-primary">
        <i style="font-size: 1.5em;"><b>&#8593;</b></i>
    </button>
</div>
<script src="js/bottomToUp.js"></script>