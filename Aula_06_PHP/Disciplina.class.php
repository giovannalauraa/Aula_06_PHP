<?php
    class Disciplina{
        private $nome;
        private $cargaHoraria;
        private $ementa;

        public function exibirDados(){
            echo "<br />";
            echo "O nome da ". __CLASS__ ." é ". $this->nome;
            echo "<br />";
            echo "A carga Horaria da ". __CLASS__ ." é ". $this->cargaHoraria;
            echo "<br />";
            echo "A ementa da ".__CLASS__." é ". $this->ementa;
        }

        public function __construct($nome, $cargaHoraria, $ementa){
            $this->nome = $nome;
            $this->cargaHoraria = $cargaHoraria;
            $this->ementa = $ementa;
            echo "<br />classe criada...";
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function inserirDisciplina()
        {
            //Conectar com o BD
            $conexao = mysqli_connect("localhost","root","", "escola");
            //verificando a conexão
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            echo "<br>Conectado com o banco.<br>";
            $sql = "INSERT INTO disciplina VALUES ('$this->nome', '$this->cargaHoraria', '$this->ementa')";
            if(mysqli_query($conexao, $sql)){
                echo "Disciplina adicionada com sucesso";
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
        
    }