window.onload = ifload;
var burgerOpen = false;
var aguacates = [
    hass = {
        titulo: 'AGUACATE HASS',
        txt:'Este sera un texto explicativo del aguacate hass, generado dinamicamente segun el aguacate con js',
        img: 'Hass.png',
        id: 'hass'
    },
    lhass = {
        titulo: 'AGUACATE LAMB HASS',
        txt:'Este sera un texto explicativo del aguacate lamb hass, generado dinamicamente segun el aguacate con js',
        img: 'Lamb Hass.png',
        id: 'lhass'
    },
    carmen = {
        titulo: 'AGUACATE CARMEN HASS',
        txt:'Este sera un texto explicativo del aguacate carmen hass, generado dinamicamente segun el aguacate con js',
        img: 'Carmen Hass.png',
        id: 'carmen'
    },
    pinkerton = {
        titulo: 'AGUACATE PINKERTON',
        txt:'Este sera un texto explicativo del aguacate pinkerton, generado dinamicamente segun el aguacate con js',
        img: 'Pinkerton.png',
        id: 'pinkerton'
    },
    boyce = {
        titulo: 'AGUACATE JAN BOYCE',
        txt:'Este sera un texto explicativo del aguacate jan boyce, generado dinamicamente segun el aguacate con js',
        img: 'Jan Boyce.png',
        id: 'boyce'
    },
    carla = {
        titulo: 'AGUACATE CARLA',
        txt:'Este sera un texto explicativo del aguacate carla, generado dinamicamente segun el aguacate con js',
        img: 'Carla.png',
        id: 'carla'
    },
    reed = {
        titulo: 'AGUACATE REED',
        txt:'Este sera un texto explicativo del aguacate reed, generado dinamicamente segun el aguacate con js',
        img: 'Reed.png',
        id: 'reed'
    },
    pollock = {
        titulo: 'AGUACATE POLLOCK',
        txt:'Este sera un texto explicativo del aguacate pollock, generado dinamicamente segun el aguacate con js',
        img: 'Pollock.png',
        id: 'pollock'
    },
    gwen = {
        titulo: 'AGUACATE GWEN',
        txt:'Este sera un texto explicativo del aguacate gwen, generado dinamicamente segun el aguacate con js',
        img: 'Gwen.png',
        id: 'gwen'
    },
    wurtz = {
        titulo: 'AGUACATE WURTZ',
        txt:'Este sera un texto explicativo del aguacate wurtz, generado dinamicamente segun el aguacate con js',
        img: 'wurtz.png',
        id: 'wurtz'
    }
]


function ifload(){
    if (document.getElementById('hass'))
        load();
    loadBurger();
    if (document.getElementById('descubrir'))
        document.getElementById('desplegable').setAttribute('class','d-none')
}

function load() {
    console.log('ye');
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
    document.getElementById('hass2').addEventListener('click', function () {display(hass)});
    document.getElementById('lhass2').addEventListener('click', function () {display(lhass)});
    document.getElementById('carmen2').addEventListener('click', function () {display(carmen)});
    document.getElementById('pinkerton2').addEventListener('click', function () {display(pinkerton)});
    document.getElementById('boyce2').addEventListener('click', function () {display(boyce)});
    document.getElementById('carla2').addEventListener('click', function () {display(carla)});
    document.getElementById('reed2').addEventListener('click', function () {display(reed)});
    document.getElementById('pollock2').addEventListener('click', function () {display(pollock)});
    document.getElementById('gwen2').addEventListener('click', function () {display(gwen)});
    document.getElementById('wurtz2').addEventListener('click', function () {display(wurtz)});
}

function display(aguacate){
    let titulo = document.createTextNode(aguacate.titulo);
    document.getElementById('m-tit').innerHTML = "";
    document.getElementById('m-tit').appendChild(titulo);

    let txt = document.createTextNode(aguacate.txt);
    document.getElementById('m-txt').innerHTML = "";
    document.getElementById('m-txt').appendChild(txt);
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