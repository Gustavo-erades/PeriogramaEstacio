<link rel="stylesheet" href="css/novoStyle.css">
<div class="mt-3">
    <h1 class="display-4" style="color:#0D5B6C;">Prontuários</h1>
    <h4 class="text-align-right" style="font-weight:bold;color:#0D5B6C">
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