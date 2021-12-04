<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/history_learn.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Historias</title>
</head>

<body>
    <!--  HIDDEN FIELDS-->
    <input type="hidden" id="hiddenProgress" value="0" />
    <input type="hidden" id="hiddenNumber" value="1" />

    <div class="chat-box-loaded">
        <center>
            <div class="container load-progess-container">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>
            </div>
        </center>





        <div class="container title">
            <h1> Poupança </h1>
        </div>

        <div class="container dialog">
            <div class="col-md-8">
                <div class="position-relative">
                    <div class="bg-history" style="overflow: auto; width: 700px;height: 500px; ">

                        <div class="chat-message-left pb-4">
                            <div>
                                <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                            </div>
                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                <div class="font-weight-bold mb-1">Sharon</div>
                                Olá Billy, como posso te ajudar?
                            </div>
                        </div>

                        <div class="show-card" id="2" HIDDEN>
                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-6.svg" alt="Billy" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">Billy</div>
                                    <div class="text-message"> Olá Sharon! Gostaria de entender um pouco melhor sobre a poupança. </div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="3" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> Esse é um tema muito interessante! </div>
                                </div>
                            </div>
                        </div>


                        <div class="show-card" id="4" HIDDEN>
                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-6.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">Billy</div>
                                    <div class="text-message"> Eu sei que é um lugar para guardar dinheiro, pensei em guardar todas as minhas economias lá. </div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="5" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> Vamos lá, vou te explicar melhor. </div>
                                </div>
                            </div>
                        </div>

                        <div class="msgtext" id="6" hidden>
                            <hr> O que é Poupança? </hr>
                        </div>

                        <div class="show-card" id="7" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> A poupança, também conhecida como “caderneta de poupança” é um tipo de conta bancária voltada para as pessoas que buscam acumular quantias de dinheiro, realizando a menor quantidade de retiradas possível.</div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="8" HIDDEN>
                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-6.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">Billy</div>
                                    <div class="text-message"> Que legal! Mas queria entender melhor como ela funciona... </div>
                                </div>
                            </div>
                        </div>

                        <div class="msgtext" id="9" hidden>
                            <hr> Como funciona a poupança? </hr>
                        </div>

                        <div class="show-card" id="10" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> O funcionamento da <b> poupança </b> é bastante simples. </div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="11" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> Com a poupança aberta, é só começar a realizar os depósitos. A cada depósito, um mês após a data de entrada do dinheiro, é contado o rendimento de acordo com a porcentagem e taxas praticadas na época. </div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="12" HIDDEN>
                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-6.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">Billy</div>
                                    <div class="text-message"> Que maneiro! Vou colocar todo meu dinheiro na poupança agora!!</div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="13" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> Billy, não faça isso! Esse é um dos maiores erros que a maioria dos brasileiros cometem na tentativa de "Economizar Dinheiro". </div>
                                </div>
                            </div>
                        </div>

                        <div class="show-card" id="14" HIDDEN>
                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://cdn2.hubspot.net/hubfs/53/tools/make-my-persona/avatars/static-avatars/avatar-7.svg" alt="Sharon" class="rounded-circle mr-1" width="40" height="40">
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">Sharon</div>
                                    <div class="text-message"> Billy, não faça isso! Esse é um dos maiores erros que a maioria dos brasileiros cometem na tentativa de "Economizar Dinheiro". </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <hr>
        <footer class="footer">

            <div class="text-center history-finished" hidden id="finished">
                <a href="/BolsoCheio/page_history/history_learn.php" role="button" class="btn btn-primary"> <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> </a>
                <a href="/BolsoCheio/index.php" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                <br>
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="margin-top:50px;"></span> &nbsp; Parabéns!
                <small id="emailHelp" class="form-text text-muted">Alguma dúvida? Consulte nosso <a href="#"> material </a> online!</small>
            </div>

            <div class="container text-right" id="myButton">
                <button id="btn-go" type="button" class="btn btn-success" onclick="btnClicked()"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
            </div>
        </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>


<script type="text/javascript">
    function btnClicked() {
        var tamanho, progress = null;

        progress = document.querySelector(".progress-bar");
        tamanho = document.getElementById("hiddenProgress").value

        console.log(tamanho)

        tamanho = parseInt(tamanho)
        tamanho += 8;

        progress.style.width = "" + tamanho.toString() + "%";

        var novotamanho = document.getElementById("hiddenProgress").value = tamanho

        if (novotamanho > 96) {
            console.log("Finished");
            progress.style.backgroundColor = "#5cb85c";
            finishedMessage();
        } else {
            nextMessage();
        }

    }


    function nextMessage() {
        var newId, hiddenNumber;

        hiddenNumber = document.getElementById("hiddenNumber").value
        hiddenNumber = parseInt(hiddenNumber)
        hiddenNumber += 1;
        newId = document.getElementById("hiddenNumber").value = hiddenNumber

        var newMessage = document.getElementById(newId).removeAttribute("hidden");
    }

    function finishedMessage() {
        document.getElementById("finished").removeAttribute("hidden");
        document.getElementById("myButton").setAttribute("hidden", true);
    }
</script>