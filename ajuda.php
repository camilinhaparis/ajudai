<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>    
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>   
   
<body>
  
  <!-----------CABEÇÁRIO------>
  <section id="topo">  
  <?php include "head/cabecalho.php"; ?>
  </section>

    <!----ACESSIBILIDADE----->
    <section >  
      <?php include "body/acessibilidade.php"; ?>
    </section>

    <main>

<section class=" text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h2 style="color:#5aa2d8">Ajudaí</h2>
      <p class="lead text-muted">Como podemos te ajudar?</p>
     </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img src="img/conta.png" class="py-4 card-img-top mx-auto d-block " style="width: 50%; height: 50% ">
          <div class="card-body">
            <h5><p class="card-text">1º Passo: clique em entrar</p></h5>
            <p class="card-text">Em segundos você cria sua conta.</p>
           <br>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img src="img/cadastro.png" class="py-4 card-img-top mx-auto d-block " style="width: 50%; height: 50% ">

          <div class="card-body">
          <h5><p class="card-text">2º Passo: cadastre o seu serviço</p></h5>
            <p class="card-text">Mantenha sempre atualizada sua conta.</p>
            <br>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
          <img src="img/conta.png" class="py-4 card-img-top mx-auto d-block " style="width: 50%; height: 50% " >
          <div class="card-body">
          <h5><p class="card-text">3º Passo: negocie direto</p></h5>
            <p class="card-text">Faça bons negócios e fidelize seus clientes.</p>
           <br>
          </div>
        </div>
      </div>
</main>

<br>
<!-----------rodapé----------->
<section id="rodape">  
<?php include("head/rodape_index.php"); ?>
</section>


      
</body>

</html>
