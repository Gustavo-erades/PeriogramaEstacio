<link rel="stylesheet" href="css/novoStyle.css">
<div class="mt-3 text-align-center">
    <h1 class="display-4 text-light">Prontuários</h1>
</div>
<hr>
<div class="row">
    <div class="col-4">
        <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
            <nav class="nav nav-pills flex-column">
                <a class="nav-link" href="#item-1">Saúde geral</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                    <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                </nav>
                <a class="nav-link" href="#item-2">Questionário Odontológico</a>
            </nav>
        </nav>
    </div>
    <div class="col-8">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
            <?= $this->element('divFormsNovo') ?>
        </div>
    </div>
</div>