<?php
require_once 'layouts/layout-header.php';
?>

<div class="shadow rounded mt-5 px-4 py-3">
    <h3 colspan="5" class="text-center fw-bold fs-3">
        Salvar Contato
    </h3>
    <form action="../../Http/Controllers/SalvarContato.php" method="post" class="mt-3" id="form">
        <div class="row g-2 mb-md-3 mb-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do contato">
                    <label for="username">Nome</label>
                    <div class="invalid-feedback">
                        Informe um nome!
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="number" class="form-control" name="idade" id="idade" placeholder="Idade do contato">
                    <label for="idade">Idade</label>
                    <div class="invalid-feedback">
                        Informe uma idade!
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone do contato">
                    <label for="telefone">Telefone</label>
                    <div class="invalid-feedback">
                        Informe um telefone!
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" name="sexo" role="switch" id="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" name="sexo" role="switch" id="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">
                        Feminino
                    </label>
                </div>
            </div>
        </div>
        <button type="buttom" class="btn btn-indigo">Salvar</button>
    </form>
</div>

<!-- Script de validação -->
<script src="../inc/js/validation.js"></script>

<?php
require_once 'layouts/layout-header.php';
?>