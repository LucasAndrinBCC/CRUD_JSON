<?php 
namespace Http\Models;

class Contato {
    private string $nome;
    private int $idade;
    private string $sexo;
    private string $telefone;

    protected static $table = '../../data/contatos.json';

    public function __construct($nome, $idade, $sexo, $telefone)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
    }

    public function save() {
        $contatos = $this->getContatos();

        $table = $this->writeAbleTable();

        if ($contatos === null) {
            $contatos = [];
        }

        $contatos[] = [
            'nome' => $this->nome,
            'idade' => $this->idade,
            'sexo' => $this->sexo,
            'telefone' => $this->telefone
        ];

        fwrite($table, json_encode($contatos));

        fclose($table);
    }

    public function update(int $id) {
        $contatos = $this->getContatos();

        $table = $this->writeAbleTable();

        if ($contatos === null) {
            $contatos = [];
        }

        $contatos[$id] = [
            'nome' => $this->nome,
            'idade' => $this->idade,
            'sexo' => $this->sexo,
            'telefone' => $this->telefone
        ];

        fwrite($table, json_encode($contatos));

        fclose($table);
    }

    public static function destroy(int $id) {
        $contatos = self::getContatos();

        $table = self::writeAbleTable();

        array_splice($contatos, $id, 1);

        fwrite($table, json_encode($contatos));

        fclose($table);
    }

    public static function getContatos() {
        return json_decode(file_get_contents(self::$table));
    }

    private static function writeAbleTable() {
        return fopen(self::$table, 'w+');
    }
}

$acao = isset($_POST['acao'])?$_POST['acao']:'';

function salvarContato() {
    $valid = true;
    foreach ($_POST as $param) {
        if (trim($param) == null) {
            $valid = false;
        }
    }

    if ($valid) {
        $contato = new Contato(
            $_POST['nome'],
            $_POST['idade'],
            $_POST['sexo'],
            $_POST['telefone']
        );

        $contato->save();
    }
}

function excluirContato() {
    Contato::destroy($_POST['id']);
}

function alterarContato() {
    $valid = true;
    foreach ($_POST as $param) {
        if (trim($param) == null) {
            $valid = false;
        }
    }

    if ($valid) {
        $contato = new Contato(
            $_POST['nome'],
            $_POST['idade'],
            $_POST['sexo'],
            $_POST['telefone']
        );

        $contato->update($_POST['id']);
    }
}

if ($acao == 'salvar') {
    salvarContato();
} else if ($acao == 'excluir') {
    excluirContato();
} else if ($acao == 'alterar') {
    alterarContato();
}

header('location: ../../resources/views/index.php');

?>