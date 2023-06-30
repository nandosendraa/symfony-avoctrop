window.onload = ifload;
var burgerOpen = false;
var ventanaOpen = false;
var aguacates = [
    hass = {
        titulo: 'AGUACATE HASS',
        txt:'Este sera un texto explicativo del aguacate hass, generado dinamicamente segun el aguacate con js',
        img: 'Hass.png'
    },
    lhass = {
        titulo: 'AGUACATE LAMB HASS',
        txt:'Este sera un texto explicativo del aguacate lamb hass, generado dinamicamente segun el aguacate con js',
        img: 'Lamb Hass.png'
    },
    carmen = {
        titulo: 'AGUACATE CARMEN HASS',
        txt:'Este sera un texto explicativo del aguacate carmen hass, generado dinamicamente segun el aguacate con js',
        img: 'Carmen Hass.png'
    },
    pinkerton = {
        titulo: 'AGUACATE PINKERTON',
        txt:'Este sera un texto explicativo del aguacate pinkerton, generado dinamicamente segun el aguacate con js',
        img: 'Pinkerton.png'
    },
    boyce = {
        titulo: 'AGUACATE JAN BOYCE',
        txt:'Este sera un texto explicativo del aguacate jan boyce, generado dinamicamente segun el aguacate con js',
        img: 'Jan Boyce.png'
    },
    carla = {
        titulo: 'AGUACATE CARLA',
        txt:'Este sera un texto explicativo del aguacate carla, generado dinamicamente segun el aguacate con js',
        img: 'Carla.png'
    },
    reed = {
        titulo: 'AGUACATE REED',
        txt:'Este sera un texto explicativo del aguacate reed, generado dinamicamente segun el aguacate con js',
        img: 'Reed.png'
    },
    pollock = {
        titulo: 'AGUACATE POLLOCK',
        txt:'Este sera un texto explicativo del aguacate pollock, generado dinamicamente segun el aguacate con js',
        img: 'Pollock.png'
    },
    gwen = {
        titulo: 'AGUACATE GWEN',
        txt:'Este sera un texto explicativo del aguacate gwen, generado dinamicamente segun el aguacate con js',
        img: 'Gwen.png'
    },
    wurtz = {
        titulo: 'AGUACATE WURTZ',
        txt:'Este sera un texto explicativo del aguacate wurtz, generado dinamicamente segun el aguacate con js',
        img: 'wurtz.png'
    }
]

function transformar1() {
    var forma = document.getElementById("forma1");
    forma.classList.add("rectangulo");
    forma.innerHTML = 'Aguacates de primera calidad procedentes de nuestras fincas en España desde hace más de 40 años , exportados a todos los países de Europa y Asia. Póngase en contacto con nosotros para obtener más detalles.';
  }
  
  function regresar1() {
    var forma = document.getElementById("forma1");
    forma.classList.remove("rectangulo");
    forma.innerHTML = '<img class="w-50" src="/img/marca.png" alt="Marca">';
  }

  function transformar2() {
    var forma = document.getElementById("forma2");
    forma.classList.add("rectangulo");
    forma.innerHTML = "Aguacates de primera calidad procedentes de nuestras fincas en España desde hace más de 40 años , exportados a todos los países de Europa y Asia. Póngase en contacto con nosotros para obtener más detalles.";
  }
  
  function regresar2() {
    var forma = document.getElementById("forma2");
    forma.classList.remove("rectangulo");
    forma.innerHTML = '<img class="w-50" src="/img/quienes.png" alt="Quienes somos">';
  }

  function transformar3() {
    var forma = document.getElementById("forma3");
    forma.classList.add("rectangulo");
    forma.innerHTML = "Aguacates de primera calidad procedentes de nuestras fincas en España desde hace más de 40 años , exportados a todos los países de Europa y Asia. Póngase en contacto con nosotros para obtener más detalles.";
  }
  
  function regresar3() {
    var forma = document.getElementById("forma3");
    forma.classList.remove("rectangulo");
    forma.innerHTML = '<img class="w-50" src="/img/objetivo.png" alt="Objetivo">';
  }

function ifload(){
    if (document.getElementById('hass'))
        load();
    loadBurger();
}

function load() {
    var forma1 = document.getElementById("forma1");
    forma1.addEventListener("mouseout", regresar1);
    forma1.addEventListener("mousehover", transformar1);
    var forma2 = document.getElementById("forma2");
    forma2.addEventListener("mouseout", regresar2);
    forma2.addEventListener("mousehover", transformar2);
    var forma3 = document.getElementById("forma3");
    forma3.addEventListener("mouseout", regresar3);
    forma3.addEventListener("mousehover", transformar3);
    document.getElementById('desplegable').setAttribute('class','d-none')
    document.getElementById('hass').addEventListener('click', function () {display(hass)});
    document.getElementById('lhass').addEventListener('click', function () {display(lhass)});
    document.getElementById('carmen').addEventListener('click', function () {display(carmen)});
    document.getElementById('pinkerton').addEventListener('click', function () {display(pinkerton)});
    document.getElementById('boyce').addEventListener('click', function () {display(boyce)});
    document.getElementById('carla').addEventListener('click', function () {display(carla)});
    document.getElementById('reed').addEventListener('click', function () {display(reed)});
    document.getElementById('pollock').addEventListener('click', function () {display(pollock)});
    document.getElementById('gwen').addEventListener('click', function () {display(gwen)});
    document.getElementById('wurtz').addEventListener('click', function () {display(wurtz)});
    document.getElementById('cruz').addEventListener('click',dnone);
}

function loadBurger(){
    document.getElementById('burger').addEventListener('click', function () { burger()});
}

function burger(){
    if (burgerOpen == false){
        document.getElementById('desplegable').setAttribute('class',"row bg-amarillo");
        burgerOpen = true;
    }
    else{
        document.getElementById('desplegable').setAttribute('class',"row bg-amarillo d-none d-md-flex");
        burgerOpen = false;
    }
}


function display(aguacate){
    if (ventanaOpen == false){
        document.getElementById('ventana').setAttribute('class','position-absolute bg-verde rounded-2 mt-5 mb-5 w-50 txtaguacate');
        ventanaOpen = true;
    } else if (ventanaOpen == true){
        document.getElementById('ventana').setAttribute('class','d-none');
        ventanaOpen = false;
    }
    document.getElementById('titA').innerHTML = '',
    document.getElementById('titA').appendChild(document.createTextNode(aguacate.titulo))
    document.getElementById('txtA').innerHTML = '',
    document.getElementById('txtA').appendChild(document.createTextNode(aguacate.txt))
    document.getElementById('imgA').setAttribute('src','img/aguacate/'+aguacate.img)
}

function dnone(){
    if (ventanaOpen == true){
        document.getElementById('ventana').setAttribute('class','position-absolute bg-verde border border-dark border-2 mt-5 mb-5 w-50 txtaguacate d-none');
        ventanaOpen = false;
    }
}


