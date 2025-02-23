<style>
    .caixa_perguntas {
        background-color: #0d5b6caa; /* Cor de fundo clara */
        background: #0d5b6caa;
        border-radius: 6px;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #0d5b6c; /* Adicionando uma borda suave para contraste */
    }
    span, label {
        color:rgb(255, 255, 255); /* Alterando a cor do texto para preto */
    }
    input[type="checkbox"] {
        accent-color: #0d5b6c; /* Cor do checkbox */
        border-radius: 4px;
    }
    .checkbox-wrapper-61 svg {
        fill: #0d5b6c; /* Alterando a cor do ícone SVG */
    }
    /* Estilizando os botões do formulário */
    button {
        background-color: #0d5b6c; /* Cor de fundo dos botões */
        color:rgb(255, 255, 255); /* Cor do texto dos botões */
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
    }
    button:hover {
        background-color: #0a4650; /* Cor de fundo ao passar o mouse */
    }
    textarea {
        background-color:rgb(255, 255, 255); /* Fundo do textarea mais suave */
        color:rgb(255, 255, 255); /* Cor do texto dentro do textarea */
        border: 1px solid #0d5b6c; /* Borda em tom harmônico */
        border-radius: 5px;
        padding: 10px;
    }
    textarea:focus {
        outline: none;
        border-color: #0a4650; /* Cor de borda ao focar */
    }
    /* Para os labels de perguntas abertas */
    .mb-3 label {
        color:rgb(255, 255, 255); /* Cor de texto das perguntas */
        font-weight: bold;
  }
   .mb-2_text-dark{
    color:rgb(255, 255, 255);
   }
</style>


<div class="form-group mt-2 mb-5">
    <div class="caixa_perguntas">
        <!-- Perguntas dos checkboxes -->
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="doresPeito" name="doresPeito" />
                    <label for="doresPeito" class="label">
                       <span>Já sentiu ou sente dores fortes no peito</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="varizes" name="varizes" />
                    <label for="varizes" class="label">
                        <span>Tem varizes?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="tontura" name="tontura" />
                    <label for="tontura" class="label">
                        <span>Quando se levanta sente tontura?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="hipertensao" name="hipertensao" />
                    <label for="hipertensao" class="label">
                        <span>É Hipertenso?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="quimioterapia" name="quimioterapia" />
                    <label for="quimioterapia" class="label">
                        <span>Já fez quimioterapia ou radioterapia?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="pneumonia" name="pneumonia" />
                    <label for="pneumonia" class="label">
                        <span>Já teve pneumonia?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="respiraBoca" name="respiraBoca" />
                    <label for="respiraBoca" class="label">
                        <span>Respira pela boca?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="marcapasso" name="marcapasso" />
                    <label for="marcapasso" class="label">
                        <span>Possui prótese cardíaca ou marcapasso</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="problemaCoracao" name="problemaCoracao" />
                    <label for="problemaCoracao" class="label">
                        <span>Possui algum problema no coração?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="tratamentoMedico" name="tratamentoMedico" />
                    <label for="tratamentoMedico" class="label">
                        <span>Está agora sob tratamento médico?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="comunicaDificuldade" name="comunicaDificuldade" />
                    <label for="comunicaDificuldade" class="label">
                        <span>Tem dificuldade para se comunicar?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="fuma" name="fuma" />
                    <label for="fuma" class="label">
                        <span>Fuma?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="tratamentoPsicologico" name="tratamentoPsicologico" />
                    <label for="tratamentoPsicologico" class="label">
                        <span>faz/fez tratamento psicológico/psiquiátrico?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="osteoporose" name="osteoporose" />
                    <label for="osteoporose" class="label">
                        <span>tem osteoporose?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="reumatismo" name="reumatismo" />
                    <label for="reumatismo" class="label">
                        <span>Tem reumatismo?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="anticoncepcional" name="anticoncepcional" />
                    <label for="anticoncepcional" class="label">
                        <span>Toma anticoncepcional?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <label for=""></label>
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="eplepsia" name="eplepsia" />
                    <label for="eplepsia" class="label">
                        <span>Tem eplepsia?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="checkbox-wrapper-61">
                    <input type="checkbox" class="check" id="sinusite" name="sinusite" />
                    <label for="sinusite" class="label">
                        <span>tem/teve sinusite ou rinite?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
        </div>
        <div class="row mb-3">

        
                <div class="col-12 col-md-6">
                <div class="checkbox-wrapper-61">
                <input type="checkbox" class="check" id="coracaoBate" name="coracaoBate" />
                    <label for="coracaoBate" class="label">
                        <span>Seu coração bate mais rápido ou mais devagar que o normal?</span>
                        <svg width="45" height="45" viewbox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none" />
                            <g transform="translate(0,-952.36222)">
                                <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4 " stroke="black" stroke-width="3" fill="none" class="path1" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            
           
        </div>

    </div>
    <div class="caixa_perguntas">
        <!-- CKEditor para perguntas abertas -->
        <div class="mb-3">
            <label for="doencaContagiosa" class="mb-2_text-dark">Já teve alguma doença contagiosa? Se <b>SIM</b> qual?</label>
            <textarea name="doencaContagiosa" class="editorOdonto" id="doencaContagiosa"></textarea>
        </div>
        <div class="mb-3">
            <label for="alergia" class="mb-2_text-dark">Tem alergia a algum medicamento? Se <b>SIM</b> qual?</label>
            <textarea name="alergia" class="editorOdonto" id="alergia"></textarea>
        </div>
        <div class="mb-3">
            <label for="bebida" class="mb-2_text-dark">Ingere bebida alcoólica? Se <b>SIM</b> com qual frequência?</label>
            <textarea name="bebida" class="editorOdonto" id="bebida"></textarea>
        </div>
        <div class="mb-3">
            <label for="drogas" class="mb-2_text-dark">Já usou drogas ilícitas? Se <b>SIM</b> qual e por quanto tempo?</label>
            <textarea name="drogas" class="editorOdonto" id="drogas"></textarea>
        </div>
        <div class="mb-3">
            <label for="medicamento" class="mb-2_text-dark">Está tomando algum medicamento? Se <b>SIM</b> quais?</label>
            <textarea name="medicamento" class="editorOdonto" id="medicamento"></textarea>
        </div>
        <div class="mb-3">
            <label for="fumar" class="mb-2_text-dark">Se <b>PAROU</b> de fumar, por quanto tempo fumou, quantidade/dias e há quanto tempo parou?</label>
            <textarea name="fumar" class="editorOdonto" id="fumar"></textarea>
        </div>
    </div>
</div>