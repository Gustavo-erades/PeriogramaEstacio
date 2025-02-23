<link rel="stylesheet" href="css/Novopaciente.css">
<div>
    <div id="alert"></div>
    <div class="mt-3">
        <center>
            <h1 class="display-4">Novo paciente</h1>
        </center>
        <center>
            <h4 class="text-align-right" style="font-weight:bold;color:#0D5B6C;">
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo date('d/m/Y');
                ?>
            </h4>
        </center>
    </div>
    <div>
        <form id="formNovoPaciente" class="p-4 rounded" style="background-color:rgba(13, 91, 108, 0.75);">
            <div class="form-group">
                <center><label for="nome" class="h2">Nome Completo</label></center>
                <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Digite o nome completo" >
            </div>
            <div class="form-group mt-3">
                <center><label for="email" class="h2">E-mail</label></center>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Digite o e-mail" >
            </div>
            <div class="form-group mt-3">
                <center><label for="telefone" class="h2">Telefone</label></center>
                <input type="tel" id="telefone" name="telefone" class="form-control form-control-lg" placeholder="Digite o telefone" >
            </div>
            <div class="form-group mt-3">
                <center><label for="dataNascimento" class="h2">Data de Nascimento</label></center>
                <input type="date" id="dataNascimento" name="dataNascimento" class="form-control form-control-lg" >
            </div>
            <div class="form-group mt-3">
                <center><label for="endereco" class="h2">Endereço</label></center>
                <input type="text" id="endereco" name="endereco" class="form-control form-control-lg" placeholder="Digite o endereço" >
            </div>

            <div class="form-group mt-3">
                <center><label for="observacoes" class="h2">Observações</label></center>
                <textarea id="observacoes" name="observacoes" class="form-control form-control-lg" placeholder="Insira informações adicionais" rows="4"></textarea>
            </div>
            <div class="form-group mt-3">
                <center><label for="alunoresponsavel" class="h2">Aluno Responsável</label></center>
                <input type="text" id="alunoResponsavel" name="alunoresponsavel" class="form-control form-control-lg" placeholder="Digite o nome do aluno responsável" >
            </div>
            <div class="mt-4 text-center">
                <button class="btn-light_paciente" onclick="cadastraPaciente()">Cadastrar</button>
            </div>
        </form>
    </div>
</div>