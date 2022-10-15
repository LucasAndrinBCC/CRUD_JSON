<?php 
namespace Http\Models;

class Contato {
    private string $nome;
    private int $idade;
    private string $sexo;
    private string $telefone;

    protected $table = '../../data/contatos.json';

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

    public static function getContatos() {
        return json_decode(file_get_contents(self::$table));
    }

    private function writeAbleTable() {
        return fopen(self::$table, 'w+');
    }
}

?>