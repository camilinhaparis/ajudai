<?php

include "connect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Ajudaí</title>
</header>

<body>

    <section id="topo">  
    <?php include "head/cabecalho.php"; ?>
    </section>
    <br>

<section class="container">
<?php

    $buscar=$_POST['buscar'];
    $sql = mysqli_query ($link, "SELECT * FROM tb_user WHERE atividade LIKE '%".$buscar."%' ");
    $row = mysqli_num_rows($sql);
    if($row > 0) {
        while($linha = mysqli_fetch_array($sql)){
            $nome = $linha['nome'];
            $atividade = $linha['atividade'];
            $telefone = $linha['telefone'];
            $perfil = $linha['perfil'];
            echo "<strong>Nome: </strong>" .@$nome;
            echo "<br/></br>";
            echo "<strong>Profissional: </strong>" .@$atividade;
            echo "<br/></br>";
            echo "<strong>Telefone: </strong>" .@$telefone;
            echo "<br/><hr/>";
        }
    }else{
        echo "Desculpe, mas nenhum profissional nessa área foi encontrado!";
    }

?>
</section>


   
</body>
</html>