<html>
    <head>
    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="mainCliente.js" type="module" defer></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
 
</head>

<body class="bg-light">

<!----ACESSIBILIDADE----->
    <section >  
    <?php include "../body/acessibilidade.php"; ?>
    </section>

    <div class="container">

        <div class="py-5 text-center">
            <a href="../index.php" class="classe1"><img src="../img/Ajudai.png" /></a>
                <h2>Cadastro Cliente</h2>   
                <p class="lead">Em observância à Lei nº. 13.709/18 – Lei Geral de Proteção de Dados Pessoais e
            demais normativas aplicáveis sobre proteção de Dados Pessoais, manifesto-me de
            forma informada, livre, expressa e consciente, no sentido de autorizar o web site
            Ajudaí a realizar o tratamento de meus Dados Pessoais para as finalidades e de
            acordo com as condições aqui estabelecidas</p>

        </div>
    
        <div class="row g-5 ">
        <!-- Inicio do formulario -->
            <form action="cadastrarCliente.php" method="post" enctype="multipart/form-data">

                <div class="row g-3 ">
                    

                    <div class="col-sm-6">
                    <label class="form-label">Nome:</label>
                    <input placeholder="Nome" class="form-control" name="nome"  type="text" id="nome"/>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">Sobrenome:</label>
                    <input placeholder="Sobrenome" class="form-control" name="sobrenome" type="text" id="sobrenome"/>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">E-mail:</label>
                    <input placeholder="email" class="form-control" name="email" type="email" id="email"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Senha:</label>
                    <input placeholder="senha" class="form-control" name="senha" type="text" id="senha" />
                    </div>

                    <div class="col-sm-3">
                    <label class="form-label">Cep:</label>
                    <input placeholder="CEP" class="form-control" name="cep" type="text" id="cep" value="" />        
                    </div>

                    <div class="col-sm-4">
                    <label class="form-label">Cidade:</label>
                    <input placeholder="Cidade" class="form-control" name="cidade" type="text" id="cidade"/>
                    </div>

                    <div class="col-sm-5">
                    <label class="form-label">Bairro:</label>
                    <input  class="form-control" name="bairro" type="text" id="bairro"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Rua:</label>
                    <input  class="form-control" name="endereco" type="text" id="endereco"/><br />
                    </div>

                    <div class="col-sm-2">
                    <label class="form-label">Número:</label>
                    <input placeholder="Número" class="form-control" name="numero" type="text" id="numero"/><br /> 
                    </div>

                    <div class="col-sm-4">
                    <label class="form-label">Telefone:</label>
                    <input placeholder="Digite o seu telefone" class="form-control" name="telefone" type="text" id="telefone" />
                    </div>

                    <div class="d-grid d-md-flex first"><input class=" btn btn-primary btn-lg" type="submit" value="Cadastrar"></div>
                    
                </div>
            </form>
            
        </div>
    </div>

    <section id="rodape">  
      <?php include("../head/rodape_index.php"); ?>
    </section>

</body>

</html>