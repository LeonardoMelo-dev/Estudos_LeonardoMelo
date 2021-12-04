<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="./image/download.png"><span class="font-weight-bold">User</span><span class="text-black-50">email@hotmail.com</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Editar Perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nome</label><input type="text" class="form-control" placeholder="Edinaldo" value="" readonly></div>
                        <div class="col-md-6"><label class="labels">Sobrenome</label><input type="text" class="form-control" value="" placeholder="Pereira" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Senha *</label><input type="password" class="form-control" placeholder="" value=""></div>
                        <div class="col-md-12"><label class="labels">Endereço</label><input type="text" class="form-control" placeholder="Paraíba&#45;PB, Patos&#45;Industrial" value="" readonly></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="email@hotmail.com" value="" readonly></div>
                        <div class="col-md-12"><label class="labels">Educação</label><input type="text" class="form-control" placeholder="UNASP" value="" readonly></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">País</label><input type="text" class="form-control" placeholder="Brasil" value="" readonly></div>
                        <div class="col-md-6"><label class="labels">Estado/Região</label><input type="text" class="form-control" value="" placeholder="SP" readonly></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" style="background-color: #6c63ff; border-color: #6c63ff;">Salvar Perfil</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Editar Experiencia</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experiencia</span></div><br>
                    <div class="col-md-12"><label class="labels">Experiencia</label><input type="text" class="form-control" placeholder="experiencia" value="" readonly></div> <br>
                    <div class="col-md-12"><label class="labels">Adicionais</label><input type="text" class="form-control" placeholder="detalhes adicionais" value="" readonly></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>