<?php
SESSION_START();
include "verifica_login.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>
    <link rel="stylesheet" href="css/estilo.css" >
    
</head>   
   
<body>
   <!----ACESSIBILIDADE----->
    <section >  
      <?php include "body/acessibilidade.php"; ?>
    </section>

  <!-----------CABEÇÁRIO------>
  <section id="principal">    
    <section id="topo" style="background-image:url(<?php echo "users/$email_log/$capa_log"; ?>);background-size:cover;">  
    <?php include "topo.php"; ?>
    </section>

    <!-----------CONTEÚDO------>
    <section id="conteudo">  
    <?php include "conteudo.php"; ?>
    </section>

    <!-----------rodapé----------->
    <section id="rodape">  
    <?php include "head/rodape.php"; ?>
    </section>
</section>      
</body>
</html>
