<!-- navbar -->
<nav class="navbar  corPadrao sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h5>Estácio-Odontologia</h5>
        <a class="navbar-brand" href="#" id="linkLogo">
            <img src="./img/estacioLogo.png" alt="Estácio" width="50">
        </a>
        <div class="offcanvas corPadrao offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <a href="#" class="nav-link-especial">
                        <b>Fulano D. Tal <img src=".\img\dente.png" width="20"></b>
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a id="navProntuario" class="nav-link" href="#">Prontuarios<img src=".\img\prontuario.png" width="20"></a>
                    </li>
                    <li class="nav-item">
                        <a id="navNovo" class="nav-link" href="#">Novo Prontuário<img src=".\img\novoprontuario.png" width="20"></a>
                        
                    </li>
                    <li class="nav-item">
                        <a id="navNovoPaciente" class="nav-link" href="#">Novo Paciente<img src=".\img\pessoa.png" width="20"></a>
                    </li>
                    <li class="nav-item">
                        <a id="navSair" class="nav-link" href="#">Sair<img src=".\img\porta.png" width="20"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>