<link rel="stylesheet" href="css/novoStyle.css">
<div class="mt-3">
    <h1 class="display-4 text-light">Prontuários</h1>
    <ul class="nav nav-underline">
        <li class="nav-item">
            <a class="nav-link navbarNovo" aria-current="page" href="#saudegeral">Saúde Geral</a>
        </li>
        <li class="nav-item">
            <a class="nav-link navbarNovo" href="#questionario">Questionário</a>
        </li>
    </ul>
</div>
<div class="mt-3">
    <?= $this->element('divFormsNovo') ?>
    <!-- Botão "De volta ao topo" -->
    <button id="backToTop" class="back-to-top">
        <i style="font-size: 1.5em;"><b>&#8593;</b></i>
    </button>
</div>
<script src="js/bottomToUp.js"></script>