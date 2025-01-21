<link rel="stylesheet" href="css/novoStyle.css">
<div class="mt-3">
<<<<<<< Updated upstream
    <h1 class="display-4">Prontuários</h1>
    <p class="text-align-right text-light" style="font-weight:bold">
=======
    <center><h1 class="display-4">Novo prontuário</h1></center>
    <center><h4 class="text-align-right text-light" style="font-weight:bold">
>>>>>>> Stashed changes
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y');
        ?>
<<<<<<< Updated upstream
    </p>
=======
    </h4></center>
>>>>>>> Stashed changes
</div>
<div class="mt-3">
    <?= $this->element('divFormsNovo') ?>
    <!-- Botão "De volta ao topo" -->
    <button id="backToTop" class="back-to-top btn-primary">
        <i style="font-size: 1.5em;"><b>&#8593;</b></i>
    </button>
</div>
<script src="js/bottomToUp.js"></script>