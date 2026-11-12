<?php

require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

do {
    print "\n******Calculadora de salario******\n\n";
    print "1-Gerente\n";
    print "2-Desenvolvedor\n";
    print "3-Estagiario\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opção:");

    switch ($opcao) {
        case 1:
            $cargo = new Gerente();
          
            $cargo->setNomeFuncionario(readline("Informe o nome do gerente: "));
            print $cargo;

            break;

        case 2:
            $cargo = new Desenvolvedor();
           
            $cargo->setNomeFuncionario(readline("Informe o nome do desenvolvedor: "));
            print $cargo;

            break;

        case 3:
            $cargo = new Estagiario();
            
            $cargo->setNomeFuncionario(readline("Informe o nome do estagiario: "));
            print $cargo;

            break;

        case 0:
            print "Obrigado(a), tchau!\n";
            break;

        default:
            print "Opção inválida!\n";
            break;
    }
} while ($opcao != 0);
