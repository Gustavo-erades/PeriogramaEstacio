<div class="mt-3">
    <h1 class="display-4">Prontuários</h1>
</div>
<div class="input-group input-group-lg mt-3">
    <input type="text" class="form-control" placeholder="Procurar prontuário">
    <span class="input-group-text" id="basic-addon2">
        <i class="fas fa-search text-light"></i>
    </span>
</div>
<div style="text-align:right">
<p class="text-dark">
    <?=sizeof($pacientesRegistrados)?> pacientes
</p>
</div>

<div>
    <?php foreach($pacientesRegistrados as $paciente): ?>
        <div class="card w-100 mt-3 mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-dark"><?=$paciente['Paciente']['nome']?> #<?=$paciente['Paciente']['id']?> </h5>
                <p class="card-text text-dark">
                    <?=$paciente['Paciente']['email']?> 
                </p>
                <p class="card-text text-dark">
                    <?=$paciente['Paciente']['idade']?> anos
                </p>
                <p class="card-text text-dark">
                    <?=$paciente['Paciente']['obs']?>
                </p>
                <div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-novaCor">Ver prontuário</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>