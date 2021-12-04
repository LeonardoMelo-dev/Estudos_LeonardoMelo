<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title> BolsoCheio</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row col-md-8">
            <h5> Você pensa na sua  <b style="color:#6c63ff"> aposentadoria? </b> </h4>
            <p>Essa é uma preocupação de 70% da população Brasileira, você está preparado?</p>
          </div>

           <div class="row col-md-8">
            <h5> Malefícios do Cartão de Crédito</h4>
            <p>Você parcela tudo que compra? Saiba os malefícios dessa prática.</p>
          </div>

          <div class="row col-md-8">
            <h5> Você perde dinheiro na poupança? </h4>
            <p>O retorno da poupança fica abaixo da inflação em muitos momentos. Isso quer dizer que os produtos que você consome diariamente encarecem...</p>
          </div>

          <div class="row col-md-8">
            <h4 style="color:#6c63ff;font-weight:bold" > Simular Redimento Anual: </h4>
            <br><br>
            
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="simular" placeholder="Valor" >
                        </div>
                         <div class="form-group col-md-6">
                            <button class="btn btn-primary" Style="height:38px" onclick="calcularPoupanca()" > Simular </button>
                        </div>
                    </div>

                    <div id="resultado-oculto" class="row" style="margin-left:10px" hidden>
                        <br>
                        <h5 id="resultado"> </h5>
                    </div>

          </div>
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login</h3>
            </div>
            <form action="../loginDatabase.php" method="post">
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>

              </div>
              <div class="form-group last mb-4" style="margin-top:15px;">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Lembrar senha</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" data-toggle="modal" data-target="#ModalLongoExemplo" class="forgot-pass">Registrar</a></span> 
              </div>

              <input type="submit" value="Entrar" class="btn btn-block btn-primary">

              
              <div class="social-login" Style="margin-top:40px; margin-left:100px">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>


 <!-- Modal -->
<div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalLongoExemplo"><b>Formulário de Registro</b></h5>
            </div>

            <div class="modal-body">
                <form method="post" action = "../register.php">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                            <small id="nomeHelp" class="form-text text-muted">
                                Não compartilharemos seu e-mail.
                            </small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Sobrenome</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pass">Senha</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>


                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Receber Notificações?</label>
                        <small id="emailHelp" class="form-text text-muted">
                            <br />
                            Receba nosso conteudo e noticias por e-mail, mantenha-se conectado!
                        </small>
                    </div>
             <div class="modal-footer" Style="margin-top:20px">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
                </form>
            </div> 
        </div>
    </div>
</div>

     <script type="text/javascript">
        function calcularPoupanca()
        {
           var valor = document.getElementById("simular").value;

           if(valor != "")
           {
               const tr = 0;
               const taxaSelic = 7.75;
               let totalBonusAno = 0;
               let bonus = (taxaSelic * 0.7) + tr;

               totalBonusAno = valor *( bonus/100);

               document.getElementById("resultado-oculto").removeAttribute("hidden"); 
               document.getElementById("resultado").innerHTML = "Rendimento Simulado:" + " &nbsp;" + totalBonusAno.toFixed(2).toString() ;
           }
      
        }

    </script>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>