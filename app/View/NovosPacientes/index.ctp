<link rel="stylesheet" href="css/Novopaciente.css">
<div class="mt-3">
<<<<<<< Updated upstream
    <h1 class="display-4">NovoPaciente</h1>
</div>
<div class="input-group input-group-lg mt-3">
    <input type="text" class="form-control" placeholder="Procurar prontuário">
    <span class="input-group-text" id="basic-addon2">
        <i class="fas fa-search"></i>
    </span>
</div>
<div>
    <div class="card w-100 mt-3 mb-3">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
            </p>
            <p class="card-text">
                breve descrição da situação do paciente
            </p>
            <div>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-download"></i>
                </a>
                <p class="card-view"><a href="#" class="btn btn-primary">Ver prontuário</a></p>
            </div>
        </div>
    </div>
=======
    <center><h1 class="display-4">Novo paciente</h1></center>
    <center><h4 class="text-align-right text-light" style="font-weight:bold">
        <?php 
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y');
        ?>
    </h4></center>
>>>>>>> Stashed changes
</div>
<div>
<form class="p-4 rounded" style="background-image: linear-gradient(-180deg, #378ae2e0 0%,rgba(30, 75, 200, 0.6) 100%); max-width: 1600px; margin: 20px;">
        <div class="form-group">
            <center><label for="nome" class="h2">Nome Completo</label></center>
            <input type="text" id="nome" class="form-control" placeholder="Digite o nome completo" required>
        </div>
        <div class="form-group mt-3">
        <center><label for="email" class="h2">E-mail</label></center>
            <input type="email" id="email" class="form-control" placeholder="Digite o e-mail" required>
        </div>
        <div class="form-group mt-3">
        <center><label for="telefone" class="h2">Telefone</label></center>
            <input type="tel" id="telefone" class="form-control" placeholder="Digite o telefone" required>
        </div>
        <div class="form-group mt-3">
        <center><label for="dataNascimento" class="h2">Data de Nascimento</label></center>
            <input type="date" id="dataNascimento" class="form-control" required>
        </div>
        <div class="form-group mt-3">
        <center><label for="endereco" class="h2">Endereço</label></center>
            <input type="text" id="endereco" class="form-control" placeholder="Digite o endereço" required>
        </div>

        <div class="form-group mt-3">
        <center><label for="observacoes" class="h2">Observações</label></center>
            <textarea id="observacoes" class="form-control" placeholder="Insira informações adicionais" rows="4"></textarea>
        </div>
        
        <div class="form-group mt-3">
        <center><label for="alunoresponsavel" class="h2">Aluno Responsável</label></center>
            <input type="text" id="alunoresponsavel" class="form-control" placeholder="Digite o nome do aluno responsável" required>
        </div>
        
        <div class="mt-4 text-center">
            <button type="submit" class="btn-light_paciente">Cadastrar</button>
        </div>
    </form>
</div>