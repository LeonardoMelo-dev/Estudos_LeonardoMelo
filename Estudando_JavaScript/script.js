/*
var p1 = window.document.getElementsByTagName('p')[0]
window.document.write('0 Está escrito assim: ' + p1.innerText)

var p2 = window.document.getElementsByTagName('p')[1]
window.document.write('<br> 1 Está escrito assim: ' + p2.innerText)


=====================================================================
var corpo = window.document.body
var p1 = window.document.getElementsByTagName('h1')[0]
corpo.style.background = 'black'
p1.style.color = 'blue'

=========================================================================

var num = 0

if(num == 1)
{
  window.document.body.style.background = 'Blue'
}
else if(num == 2)
{
  window.document.body.style.background = 'Pink'
}
else
{

}

===============================================================================


*/


function noClick1()
{
  window.document.body.style.background = 'black'
  window.document.body.style.color = "white"
}

function noClick2()
{
  window.document.body.style.background = 'blue'
}


function noClick3()
{
  window.document.body.style.background = 'pink'
}


function noClick4()
{
  window.document.body.style.background = 'yellow'
}




/*

RELEMBRAR TUDO ISSO NA AULA 9

window.document.getElementById('divDois').innerText = 'Estou escrevendo algo na div pelo JS';
*/


// para class usar = ".";
// para id usar = "#";

/*
var divDois = window.document.querySelector('div#divDois').innerHTML = 'Estou escrevendo algo na div pelo JS usando querySelector'
*/


/*

==================== EVENTOS =========================

var a = window.document.getElementById("area")
a.addEventListener('mouseout', sair)
function clicar()
{
  a.innerText = 'O que voce fez? D:'
  a.style.background = 'red'
}

function entrar()
{
  a.innerText = 'Não clique! D:<'
}

function sair()
{
  a.innerText = 'Tá tudo bem! :D'
  a.style.background = 'green'
}

*/



