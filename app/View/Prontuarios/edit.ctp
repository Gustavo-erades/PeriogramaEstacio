<div id="alert"></div>
<h1 class="display-5">Prontuários</h1>
<hr>
<h3 class="display-6">Saúde geral</h3>
<style>
    /* Estilo do switch */
.switch {
    position: relative;
    display: inline-block;
    width: 60px; /* largura do switch */
    height: 34px; /* altura do switch */
}

.switch input {
    opacity: 0; /* torna o checkbox invisível */
    width: 0;
    height: 0;
}

/* O slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc; /* cor do fundo */
    border-radius: 34px; /* bordas arredondadas */
    transition: .4s; /* transição suave */
}

/* O círculo dentro do switch */
.slider:before {
    position: absolute;
    content: "";
    height: 26px; /* altura do círculo */
    width: 26px; /* largura do círculo */
    left: 4px; /* posição inicial */
    bottom: 4px; /* posição inicial */
    background-color: white; /* cor do círculo */
    border-radius: 50%; /* deixa redondo */
    transition: .4s; /* transição suave */
}

/* Quando o checkbox está marcado */
input:checked + .slider {
    background-color: #2196F3; /* cor do fundo quando ativo */
}

input:checked + .slider:before {
    transform: translateX(26px); /* move o círculo para a direita */
}

</style>
<span >
    <h3 class="display-6">
        Habilitar edição
    </h3>
</span>
<label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
</label>

<form class="form-group mt-2 mb-5">
    <div class=" mb-3">
        <label for="doresPeito">Já sentiu ou sente dores fortes no peito</label>
        <input type="checkbox" name="doresPeito" id="doresPeito">
    </div>
    <div class="mb-3">
        <label for="varizes">Tem varizes?</label>
        <input type="checkbox" name="varizes" id="varizes">
    </div>
    <div class="mb-3">
        <label for="tontura">Quando se levanta sente tontura?</label>
        <input type="checkbox" name="tontura" id="tontura">
    </div>
    <div class="mb-3">
        <label for="hipertensao">É Hipertenso?</label>
        <input type="checkbox" name="hipertensao" id="hipertensao">
    </div>
    <div class="mb-3">
        <label for="pneumonia">Já teve pneumonia?</label>
        <input type="checkbox" name="pneumonia" id="pneumonia">
    </div>
    <div class="mb-3">
        <label for="respiraBoca">Respira pela boca?</label>
        <input type="checkbox" name="respiraBoca" id="respiraBoca">
    </div>
    <div class="mb-3">
        <label for="marcapasso">Possui prótese cardíaca ou marcapasso
            <div class="mb-3">
        <label for="doresPeito">Já sentiu ou sente dores fortes no peito</label>
        <input type="checkbox" name="doresPeito" id="doresPeito">
    </div>
        </label>
        <input type="checkbox" name="marcapasso" id="marcapasso">
    </div>
    <div class="mb-3">
        <label for="problemaCoracao">Possui algum problema no coração?</label>
        <input type="checkbox" name="problemaCoracao" id="problemaCoracao">
    </div>
    <div class="mb-3">
        <label for="tuberculose">Já teve tuberculose?</label>
        <input type="checkbox" name="tuberculose" id="tuberculose">
    </div>
    <div class="mb-3">
        <label for="diabetes">Tem diabete?</label>
        <input type="checkbox" name="diabetes" id="diabetes">
    </div>
    <div class="mb-3">
        <label for="pedrasRins">Tem/teve pedras nos rins?</label>
        <input type="checkbox" name="pedrasRins" id="pedrasRins">
    </div>
    <div class="mb-3">
        <label for="fuma">Fuma?</label>
        <input type="checkbox" name="fuma" id="fuma">
    </div>
    <div class="mb-3">
        <label for="tratamentoPsicologico">faz/fez tratamento psicológico/psiquiátrico?</label>
        <input type="checkbox" name="tratamentoPsicologico" id="tratamentoPsicologico">
    </div>
    <div class="mb-3">
        <label for="osteoporose">tem osteoporose?</label>
        <input type="checkbox" name="osteoporose" id="osteoporose">
    </div>
    <div class="mb-3">
        <label for="reumatismo">Tem reumatismo?</label>
        <input type="checkbox" name="reumatismo" id="reumatismo">
    </div>
    <div class="mb-3">
        <label for="anticoncepcional">Toma anticoncepcional?</label>
        <input type="checkbox" name="anticoncepcional" id="anticoncepcional">
    </div>
    <div class="mb-3">
        <label for="eplepsia">Tem eplepsia?</label>
        <input type="checkbox" name="eplepsia" id="eplepsia">
    </div>
    <div class="mb-3">
        <label for="sinusite">tem/teve sinusite ou rinite?</label>
        <input type="checkbox" name="sinusite" id="sinusite">
    </div>
    <div class="mb-3">
        <label for="tratamentoMedico">Está agora sob tratamento médico?</label>
        <input type="checkbox" name="tratamentoMedico" id="tratamentoMedico">
    </div>
    <div class="mb-3">
        <label for="quimioterapia">Já fez quimioterapia ou radioterapia?</label>
        <input type="checkbox" name="quimioterapia" id="quimioterapia">
    </div>
    <button class="btn btn-secondary" type="button" >Salvar alterações</button>
</form>