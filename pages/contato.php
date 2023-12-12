<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="github" viewBox="0 0 16 16">
    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
    </symbol>
  </svg>  
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<!-----------CABEÇÁRIO------>
<section id="topo">  
  <?php include "head/cabecalho.php"; ?>
</section>

  <!----ACESSIBILIDADE----->
  <section >  
    <?php include "body/acessibilidade.php"; ?>
  </section>
<br>
<br>
<br>
<br>
<body>
<div class="container px-4 py-5"> 
    <div class="row featurette">
      <div class="col-md-7 px-4 py-5 order-md-2">       
        
        <h1 class="mt-5">Contato</h1>
        
        <svg class="bi bi-github flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
        <div>
        <h2 class="fw-bold mb-0 fs-4 ">Camila Parise</h2>
        <p class="w-100 py-2 mb-2 " >
        <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
        <a href="https://github.com/camilinhaparis">Github</a>
        </p>
      </div>
      
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/01.png" height="500" width="500" style="display: block; margin: 0 auto;"  />
      </div>
    </div>   
    
  </div><!-- /.container -->

<!----ACESSIBILIDADE----->
<section >  
    <?php include "head/rodape_index.php"; ?>
  </section>

</body>
</html>


