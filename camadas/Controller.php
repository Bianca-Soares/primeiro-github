<?php

require_once("./bean/Usuario.class.php"); // Classe Bean
// trata a sessao
session_start();

//Armazena na variavel $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
if (isset($_REQUEST["acao"])) {
    $acao = $_REQUEST["acao"];
} else {
    $acao = null;
}
   
   
require_once("./bean/MeuCarrinho.class.php"); // Classe Bean
require_once("./bean/Produto.class.php"); // Classe Bean
//Baseado no que foi solicitado, trata a tarefa, e depois redireciona para a View a resposta
switch ($acao) {
    case 'login': {
           header('location: ../formlogin.php');
           exit;  
        }
        break; 
    case 'autenticar': {
            // Se for autenticar, receber login e senha.
            //Primeiro instanciamos um objeto da classe Bean, para setar os valores informados no formul�rio
           
            }
        }
        break;
        
    case 'excluir': {
       
        
        }
        break;
        
    case 'homepage': {
        
        header('location: ./view/homepage.php');
        exit; 
    }
        break;
 
    case 'adicionar': {

        
            exit;
      
    }
        break;
        

    default:
        echo "<h1>Erro de acao não esperado ";
        return null; //Por padr�o, esse switch n�o retorna nada.
}
?>
