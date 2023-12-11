<?php
include "connect.php";
//Recupero a sessão
//SESSION_START();
//$l de login
$l = isset($_SESSION["login_user"])?$_SESSION["login_user"] :"";
//$s de senha
//$s = $_SESSION["senha_user"];
$s = isset($_SESSION["senha_user"])?$_SESSION["senha_user"] :"";

if($l != "" && $s != ""){
    $dados = mysqli_query($link,"select * from tb_user WHERE email = '$l'");
    while ($d = mysqli_fetch_array ($dados)){
        $id_log =   $d['id_user'];
        $nome_log = $d['nome'];
        $sobrenome_log = $d['sobrenome'];
        $atividade_log = $d['atividade'];
        $email_log = $d['email'];
        $senha_log = $d['senha'];        
        $telefone_log = $d['telefone'];
        $endereco_log = $d['endereco'];
        $numero_log = $d['numero'];
        $cep_log = $d['cep'];	
        $bairro_log = $d['bairro'];
        $cidade_log = $d['cidade'];
        $estado_log = $d['estado'];
        $servico_log = $d['servico'];
        $check_log = $d['semana'];
        $checkInicio_log = $d['inicio'];
        $checkFim_log = $d['fim'];
        

        $capa_log = $d['capa'];
        $perfil_log = $d['perfil'];
    }
}else{
    header('location:perfil.php');
}

?>