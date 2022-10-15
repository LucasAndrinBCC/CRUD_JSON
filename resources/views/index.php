<?php
require_once 'layouts/layout-header.php';
// use Http\Models\Contato;

// $contatos = Contato::getContatos();
$contatos = json_decode(file_get_contents('../../data/contatos.json'));
?>

<div class="shadow rounded mt-5 px-4 pb-2">

    <table class="table tabled-dark table-striped table-hover">
    
        <thead>
            <tr>
                <th colspan="5" class="text-center border-bottom-0 fs-3">
                    Lista de contatos
                </th>
            </tr>
            <tr>
                <th class="table-dark bg-indigo rounded-top-left" scope="col">#</th>
                <th class="table-dark bg-indigo text-center" scope="col">Nome</th>
                <th class="table-dark bg-indigo text-center" scope="col">Idade</th>
                <th class="table-dark bg-indigo text-center" scope="col">Sexo</th>
                <th class="table-dark bg-indigo text-center rounded-top-right" scope="col">Telefone</th>
            </tr>
        </thead>
    
        <tbody>
            <?php
                if ($contatos) {
                    foreach ($contatos as $key => $contato) {
                        ?>
                            <tr>
                                <th class="table-light"><?php echo $key ?></th>
                                <td class="table-light text-center"><?php echo $contato->nome ?></td>
                                <td class="table-light text-center"><?php echo $contato->idade ?></td>
                                <td class="table-light text-center"><?php echo $contato->sexo ?></td>
                                <td class="table-light text-center"><?php echo $contato->telefone ?></td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    
    </table>

</div>

<?php
require_once 'layouts/layout-header.php';
?>
