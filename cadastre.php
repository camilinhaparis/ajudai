<html>
    <head>
    <title>ViaCEP Webservice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/main.js" type="module" defer></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>

<body class="bg-light">

<!----ACESSIBILIDADE----->
    <section >  
    <?php include "body/acessibilidade.php"; ?>
    </section>

    <div class="container">

        <div class="py-5 text-center">
            <a href="index.php" class="classe1"><img src="img/Ajudai.png" /></a>
                <h2>Cadastro da empresa</h2>   
                <p class="lead">Em observância à Lei nº. 13.709/18 – Lei Geral de Proteção de Dados Pessoais e
            demais normativas aplicáveis sobre proteção de Dados Pessoais, manifesto-me de
            forma informada, livre, expressa e consciente, no sentido de autorizar o web site
            Ajudaí a realizar o tratamento de meus Dados Pessoais para as finalidades e de
            acordo com as condições aqui estabelecidas</p>

        </div>
    
        <div class="row g-5 ">
        <!-- Inicio do formulario -->
            <form action="cadastrar.php" method="post" enctype="multipart/form-data">

                <div class="row g-3 ">
                    

                    <div class="col-sm-6">
                    <label class="form-label">Nome:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="nome"  type="text" id="nome"/>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">Sobrenome:</label>
                    <input placeholder="Digite o seu sobrenome" class="form-control" name="sobrenome" type="text" id="sobrenome"/>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">E-mail:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="email" type="email" id="email"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Senha:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="senha" type="text" id="senha" />
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Foto da Capa:</label>
                    <input class="form-control" class="entradas_img" name="capa" type="file" id="capa"/>
                    </div>
                    
                    <div class="col-sm-6">
                    <label class="form-label">Foto do Perfil:</label>
                    <input class="form-control" class="entradas_img" name="perfil" type="file" id="perfil" />
                    </div>
                
                    <div class="col-sm-6">
                    <label class="form-label">Atividade:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="atividade" type="text" id="atividade"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Telefone:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="telefone" type="text" id="telefone" />
                    </div>

                    <div class="col-sm-3">
                    <label class="form-label">Cep:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="cep" type="text" id="cep" value="" />        
                    </div>

                    <div class="col-sm-3">
                    <label class="form-label">Estado:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="estado" type="text" id="estado"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Cidade:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="cidade" type="text" id="cidade"/>
                    </div>

                    <div class="col-sm-4">
                    <label class="form-label">Bairro:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="bairro" type="text" id="bairro"/>
                    </div>

                    <div class="col-sm-6">
                    <label class="form-label">Rua:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="endereco" type="text" id="endereco"/><br />
                    </div>

                    <div class="col-sm-2">
                    <label class="form-label">Número:</label>
                    <input placeholder="Digite o seu nome" class="form-control" name="numero" type="text" id="numero"/><br /> 
                    </div>

                    <div class="row justify-content-center py-3">

                        <div class="col-sm-3">
                            <label class="list-group-item d-flex gap-3 "><p class="mb-3">Horário de atendimento</p></label>

                            <div class="col-auto">
                                <input value="segunda" type="checkbox" name="semana[]" />
                                <label class="form-label">Segunda:</label> 
                                <div class="input-group">  
                                <input type="time"  class="form-control form-control-sm" id="inicioSegunda" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimSegunda" name="fim[]" placeholder="Fim">
                                </div>
                            </div>

                            <div class="col-auto">
                                <input value="terca" type="checkbox" name="semana[]"/>
                                <label class="form-label">Terça:</label>
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioTerca" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimTerca" name="fim[]" placeholder="Fim">
                                </div>
                            </div>

                            <div class="col-auto">
                                <input value="quarta" type="checkbox" name="semana[]"  />
                                <label class="form-label">Quarta:</label>
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioQuarta" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimQuarta" name="fim[]" placeholder="Fim">
                                </div>
                            </div>

                            <div class="col-auto">
                                <input value="quinta" type="checkbox" name="semana[]" />
                                <label class="form-label">Quinta:</label>
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioQuinta" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimQuinta" name="fim[]" placeholder="Fim">
                                </div>  
                            </div>

                            <div class="col-auto">
                                <input value="sexta" type="checkbox" name="semana[]" />
                                <label class="form-label">Sexta:</label>
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioSexta" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimSexta" name="fim[]" placeholder="Fim">
                                </div> 
                            </div>

                            <div class="col-auto">
                                <input value="sabado" type="checkbox" name="semana[]"  />
                                <label class="form-label">Sábado:</label>
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioSabado" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimSabado" name="fim[]" placeholder="Fim">
                                </div>
                            </div>

                            <div class="col-auto">
                                <input value="domingo" type="checkbox" name="semana[]"  />
                                <label class="form-label">Domingo:</label> 
                                <div class="input-group  ">  
                                <input type="time"  class="form-control form-control-sm" id="inicioDomingo" name="inicio[]" placeholder="Início">
                                <input type="time"  class="form-control form-control-sm" id="fimDomingo" name="fim[]" placeholder="Fim">
                                </div>
                            </div>
                            
                        </div>          

                            <div class="col-md-9">
                                <label ><p> Fale sobre o serviço</p></label>
                                <textarea class="form-control " rows="18" name="servico" type="text" id="servico" ></textarea>   
                                    
                            </div>   
                           
                    </div>

                    <div class="d-grid d-md-flex first"><input class=" btn btn-primary btn-lg" type="submit" value="Cadastrar"></div>
                    
                </div>
            </form>
            
        </div>
    </div>

    <section id="rodape">  
      <?php include("head/rodape_index.php"); ?>
    </section>

</body>

</html>