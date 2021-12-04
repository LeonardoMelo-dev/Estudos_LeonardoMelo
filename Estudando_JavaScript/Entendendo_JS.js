/*
============================== VARIAVEIS ================================
RESUMO: var, let, const. 

para declarar uma variavel não precisa passar o tipo apenas colocar 'var' e o nome da variavel - 'var' para variavel global.
 EX: var idade = 17;

Para variaveis com escopo limitado usar 'let'
 EX: let nome = 'Caio';

Para Constantes usar 'const'
 EX: const verdade = true;

=========================== IFs ================================
Iuais a de qualquer linguagem

================================ Funções ================================

-- FORMA SIMPLES --
function testes()
{
  console.log('leonardo');
}

testes();

------------------------------

-- FORMA MODERNA --
const testes2 = () => {
    console.log('Leonarodo')
}

testes2()

-----------------------------
-- FORMA SINCRONA --
função é criada e chamada ao mesmo tempo
(
function()
{
  alert('Salve');
}
)();

-----------------------------
-- FORMA FUNÇÃO QUE CHAMA FUNÇÃO --
var HWGA = 'Here we go again'

function testes(nome, func)
{
  console.log(nome);
  func();
}

testes('leoanardo', function()
{
  alert(HWGA)
});

-- FORMA FUNÇÃO QUE CHAMA FUNÇÃO QUE CHAMA OBJETO--
var HWGA = 'Here we go again'

function testes(nome, func)
{
  console.log(nome);
  par = {nome:'leonardo'}
  func(par);
}

testes('leoanardo', function(par)
{
  alert(par.nome)
});

======================= CLASSES E ORIENTAÇÃO A OBJETO ====================
-------- CRIANDO E CHAMANDO ---------
class NovaClasse
{
  constructor()
  {
    this.nome = 'João';
  }

  getName()
  {
    console.log(this.nome);
  }
}

var novaClasse = new NovaClasse();

novaClasse.nome = 'Leonardo'

novaClasse.getName();

var novaClasse2 = new NovaClasse();
novaClasse2.getName();

-------- CRIANDO E CHAMANDO E PASSANDO PARAMETROS ---------

class NovaClasse
{
  constructor(nome)
  {
    this.nome = nome;
    console.log(this.nome);
  }

  getName()
  {
    console.log(this.nome);
  }
}

var novaClasse = new NovaClasse('nome qualquer');

======================= FUNÇÕES PROMISEs =================================
function testes()
{
  return new Promise(function(resolve, reject){
    if(1 == 2)
    {
      resolve('Leonardo')
    }
    else
    {
      reject('Falhou');
    }
  });
}

testes().then(function(val){
  alert(val);
}).catch(function(error){
  alert(error)
})


======================= FUNÇÕES ASSÍNCRONAS ==============================
-------------- SEM AWAIT ----------
function testes(){
  return new Promise(function(resolve,reject)
  {
    setTimeout(resolve, 3000, 'Testes')
  })
}

function testes2(){
  return new Promise(function(resolve,reject)
  {
    setTimeout(resolve, 1000, 'Testes 2')
  })
}

(
  async function(){
    testes().then(function(val){
      console.log(val);
    }); 

    testes2().then(function(val){
      console.log(val);
    }); 

    console.log('Chamando depois da função promise');
  }
)();





-------------- COM AWAIT ----------

function testes(){
  return new Promise(function(resolve,reject)
  {
    setTimeout(resolve, 3000, 'Testes')
  })
}

function testes2(){
  return new Promise(function(resolve,reject)
  {
    setTimeout(resolve, 1000, 'Testes 2')
  })
}

(
  async function(){
    await testes().then(function(val){
      console.log(val);
    }); 

    await testes2().then(function(val){
      console.log(val);
    }); 

    console.log('Chamando depois da função promise');
  }
)();

*/


/*
var nome = prompt("Qual é o seu nome?");

window.alert('Salveee ' + nome)

===============================================================

var n1 = Number(prompt("Digite um número: "));
var n2 = Number(prompt("Digite outro número: "));
var soma = n1 + n2;

alert("A soma dos valores é "+ String(soma));
alert(`A soma dos valores é ${soma}`);

==================================================================
var nome = 'leonardo'
document.write(`Seu nome tem ${nome.length} letras.<br>`)
document.write(`Seu nome em maiúsculas é ${nome.toUpperCase()}`)
*/


