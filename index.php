<?php
include "connect.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Ajudai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
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

  <section id="corpo">  

  <!----------CAROUSEL----->
  <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
    </div>           



     <!-------BUSCA Profissionais--->
 
      <div class="b-example-divider py-4"></div>
      <div class="container px-4 py-3" id="custom-cards">
          <h2 class="pb-2 text-center">Qual serviço especializado você procura?</h2>
          <h6 class=" text-center  ">Ache o profissional que você precisa aqui, 
            encanador, eletrecista, carpinteiro...</h6>
      </div> 


    <div class="container">
      <div class="card border-0">  
        <form   name="searchform" method="post" action="results.php"  >           
          <div class="row "> 
          
            <div class=" col-md-6 order-first ">
            <input class="form-control me-2" type="text" name="buscar" 
              placeholder="Pesquise por serviço" aria-label="Search">
            </div>

            <div class="col-md-4 ">
              <input type="text" class="form-control" placeholder="CEP" aria-label="First name">
            </div>

            <div class=" col order-last">
              <div class="d-grid gap-2 ">  
                <button class="btn btn-primary" type="submit">Busca</button>
              </div>
            </div>                  
          </div>
        </form> 
      </div>
    </div>



 <!-------------------CADASTRO--------------->
 
 <div class="container py-5">
    <h2 class="pb-2 text-center">3 Passos para divulgar o seu serviço</h2>
    <h6 class=" text-center  ">Não sabe como se cadastrar? basta seguir os passos...</h6>

    <div class="row">        
      <div class="card-group py-4">
        <div class="card">
            <br>
            <img src="img/conta.png" height="100" width="100" style="display: block; margin: 0 auto;"   />
          <div class="card-body">
            <h5 class="card-title">1º Passo: Crie sua conta</h5>
            <p class="card-text">Em segundos você cria sua conta.</p>      
          </div>
        </div>
        <!-------------->

      <div class="card">
          <br>
        <img src="img/cadastro.png" height="100" width="100" style="display: block; margin: 0 auto;"  />
          <div class="card-body">
            <h5 class="card-title">2º Passo: cadastre o seu serviço</h5>
            <p class="card-text">Mantenha sempre atualizada sua conta para que seus clientes possam te encontrar.</p>
        <!-------------->

          </div>
      </div>
      <div class="card">
          <br>
     <img src="img/conta.png" height="100" width="100" style="display: block; margin: 0 auto;"  />
        <div class="card-body">
          <h5 class="card-title">3º Passo: Crie sua conta</h5>
          <p class="card-text">Faça bons negócios e fidelize seus clientes.</p>
          
        </div>
      </div>
    </div>
        </div>
 </div>

 

<!-------------------------ANUNCIE----->

<div class="b-example-divider"></div>

  <div class="container " id="custom-cards">
    <h2 class="pb-2 border-bottom">Anuncie aqui!</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 " 
        style="background-image: url('img/anuncie.jpg');">
          <div class="d-flex flex-column h-100  text-white text-shadow-1">
          <img src="img/anuncie.png"  width="300" height="300" >
                        
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 " 
        style="background-image: url('img/anuncie.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">          
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Se você viu isso, seus clientes também vão ver! Anuncie</h3>
            
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 " 
        style="background-image: url('img/anuncie.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Sem manter visibilidade sua empresa não vende</h3>            
          </div>
        </div>
      </div>
    </div>
  </div>

<!-------profissionais em destaque--------->
<div class="b-example-divider"></div>

<div class="container px-4 py-3" id="icon-grid">
  <h2 class="pb-2 border-bottom">Alguns serviços que podem ser encontrados</h2>
       

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">

    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-screwdriver" viewBox="0 0 16 16">
  <path d="M0 .995.995 0l3.064 2.19a.995.995 0 0 1 .417.809v.07c0 .264.105.517.291.704l5.677 5.676.909-.303a.995.995 0 0 1 1.018.24l3.338 3.339a.995.995 0 0 1 0 1.406L14.13 15.71a.995.995 0 0 1-1.406 0l-3.337-3.34a.995.995 0 0 1-.24-1.018l.302-.909-5.676-5.677a.995.995 0 0 0-.704-.291H3a.995.995 0 0 1-.81-.417L0 .995Zm11.293 9.595a.497.497 0 1 0-.703.703l2.984 2.984a.497.497 0 0 0 .703-.703l-2.984-2.984Z"/>
</svg>
      <div>
        <h3 ><a href="profissionais.php" class="link-dark">Eletrecista</h3></a>  
      </div>
    </div>

    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-handbag-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 1 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Manicure</h3></a>        
      </div>
    </div>

    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-wrench-adjustable" viewBox="0 0 16 16">
  <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
  <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Encanador</h3></a>
        
      </div>
    </div>
    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-house-gear-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
  <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
  <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Pedreiro</h3></a>
        
      </div>
    </div>
    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-tree" viewBox="0 0 16 16">
  <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Jardineiro</h3></a>
        
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-car-front-fill" viewBox="0 0 16 16">
  <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Borracheiro</h3></a>
        
      </div>
    </div>
    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-paint-bucket" viewBox="0 0 16 16">
  <path d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Pintor</h3></a>
        
      </div>
    </div>
    <div class="col d-flex align-items-start">
    <svg xmlns="http://www.w3.org/2000/svg" width="1.75em" height="1.75em" fill="currentColor" class="me-3 bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg>
      <div>
      <h3 ><a href="profissionais.php" class="link-dark">Marceneiro</h3></a>       
      </div>
    </div>
  </div>
</div>
      
</main>
</section>

<!-----------rodapé----------->
<section id="rodape">  
<?php include("head/rodape_index.php"); ?>
</section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
      crossorigin="anonymous"></script>
</body>

</html>
