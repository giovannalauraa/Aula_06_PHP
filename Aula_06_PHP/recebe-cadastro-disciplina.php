<?php
require_once("Disciplina.class.php");

    $nome = $_POST["nome"];
    $carga = $_POST["carga"];
    $ementa = $_POST["ementa"];

    // Mostrando dados criando um objeto
    $objetoDisciplina = new Disciplina($nome, $carga, $ementa);
    $objetoDisciplina->exibirDados();
    $objetoDisciplina->inserirDisciplina();

    // Mostrando dados usando echo: 

    // echo "<br> <strong> O nome é: </strong> $nome. <br> <strong> A carga é: </strong> $carga. <br> <strong> A ementa é: </strong> $ementa";

    // include --> nome do arquivo (importa tudo que esta no arquivo) include(Disciplina.class.php);
    // require --> apenas usar quando for obrigatório importar a classe para criar um objeto --> require(Disciplina.class.php);
    // include once --> mais aplicável
    // require once --> mais aplicável
?>
