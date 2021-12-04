<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
    <title>Hackton</title>
</head>
<body>       
<nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand">Bootsbook</a>
        <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                    <!--  $_SESSION['user']->firstName  -->
                    Nome
                        <a href="logout.php">
                            <i class="icofont-logout mr-2"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-6 gedf-main">
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                    <h6>Compartilhar conhecimento</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">Poster</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="O que você está pensando?"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary">Compartilhar</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Publicar</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Apenas Você</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">Jo</div>
                                    <div class="h7 text-muted">Finanças</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuração</div>
                                        <a class="dropdown-item" href="#">Salvar</a>
                                        <a class="dropdown-item" href="#">Esconder</a>
                                        <a class="dropdown-item" href="#">Reportar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 minutos atrás</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Tudo sobre finança</h5>
                        </a>
                        <p class="card-text">
                            Poupança ou aforro é a parcela da renda ou do patrimônio que não é gasto ou consumido
                            no período em que é recebido e, por consequência, é guardado para ser utilizado em um
                            momento futuro. O conceito de poupança está intimamente relacionado com redução de
                            despesas, em particular dos gastos recorrentes.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Joinha</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> comentário</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartilhar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 card" style="margin-left: 70px;">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Poupança</h5>
                        <h6 class="card-subtitle mr-2 text-muted">Juros da Poupança</h6>
                        <p class="card-text">
                            Juros da poupança hoje: 4,38% ao ano, ou 0,36% ao mês.</p>
                        <a href="#" class="card-link">link do Card</a>
                        <a href="#" class="card-link">Outro link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
