<?php
require_once 'layouts/layout-header.php';

$contato = json_decode(file_get_contents('../../data/contatos.json'))[$_GET['id']];

?>

<div class="shadow rounded mt-5 px-4 py-3">
    <h3 colspan="5" class="text-center fw-bold fs-3">
        Alterar Contato
    </h3>
    <form action="../../Http/Models/Contato.php" method="post" class="mt-3" id="form">
        <input type="hidden" name="acao" value="alterar">
        <div class="row g-2 mb-md-3 mb-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do contato" value="<?php echo $contato->nome ?>">
                    <label for="username">Nome</label>
                    <div class="invalid-feedback">
                        Informe um nome!
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="number" class="form-control" name="idade" id="idade" placeholder="Idade do contato" value="<?php echo $contato->idade ?>">
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
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone do contato" value="<?php echo $contato->telefone ?>">
                    <label for="telefone">Telefone</label>
                    <div class="invalid-feedback">
                        Informe um telefone!
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" name="sexo" role="switch" id="masculino" value="masculino" <?php if ($contato->sexo == 'masculino') {echo 'checked';} ?>>
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="radio" name="sexo" role="switch" id="feminino" value="feminino" <?php if ($contato->sexo == 'feminino') {echo 'checked';} ?>>
                    <label class="form-check-label" for="feminino">
                        Feminino
                    </label>
                </div>
            </div>
        </div>
        <button type="buttom" class="btn btn-indigo" name="id" value="<?php echo $_GET['id'] ?>">Salvar</button>
    </form>
</div>

<!-- Script de validação -->
<script src="../inc/js/validation.js"></script>

<?php
require_once 'layouts/layout-header.php';
?>