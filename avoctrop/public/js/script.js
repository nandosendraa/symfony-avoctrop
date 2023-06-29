window.onload = ifload;
var burgerOpen = false;
var ventanaOpen = false;
var i = 0;
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
var arrIzq = [
    {
        titulo: 'Legal',
        img: 'imgLegal'
    },
    {
        titulo: 'Noticias',
        img: 'imgNoticias'
    },
    {
        titulo: 'Aguacates',
        img: 'imgAguacates'
    },
    {
        titulo: 'Recetas',
        img: 'imgRecetas'
    },
    {
        titulo: 'Contacto',
        img: 'imgContacto'
    },
    {
        titulo: 'Galeria',
        img: 'imgGaleria'
    },
];
var arrCen = [
    {
        titulo: 'Noticias',
        descripcion: 'DESCUBRE NUESTRAS NOVEDADES',
        destino: 'noticias'
    },
    {
        titulo: 'Aguacates',
        descripcion: 'TENEMOS MUCHAS VARIEDADES DE AGUACATES',
        destino: '#aguacates'
    },
    {
        titulo: 'Recetas',
        descripcion: 'PRUEBA A REPLICAR NUESTRAS DELICIOSAS RECETAS',
        destino: 'recetas'
    },
    {
        titulo: 'Contacto',
        descripcion: '¿TIENES ALGUNA DUDA? CONTÁCTANOS',
        destino: 'contacto'
    },
    {
        titulo: 'Galeria',
        descripcion: 'HÉCHALE UN VISTAZO A NUESTRA GALERIA DE IMAGENES',
        destino: 'galeria'
    },
    {
        titulo: 'Legal',
        descripcion: 'CONSULTA LAS BASES LEGALES',
        destino: 'legal'
    }
];
var arrDer = [
    {
        titulo: 'Aguacates',
        img: 'imgAguacates'
    },
    {
        titulo: 'Recetas',
        img: 'imgRecetas'
    },
    {
        titulo: 'Contacto',
        img: 'imgContacto'
    },
    {
        titulo: 'Galeria',
        img: 'imgGaleria'
    },
    {
        titulo: 'Legal',
        img: 'imgLegal'
    },
    {
        titulo: 'Noticias',
        img: 'imgNoticias'
    }
];

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
    document.getElementById('iz').addEventListener('click', function () { izquierda(true)});
    document.getElementById('de').addEventListener('click', function () { derecha(true)});
    intervalo();
    pintar();
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

function pintar() {
    let titI = document.getElementById('titI');
    let imgI = document.getElementById('imgI');
    let titC = document.getElementById('titC');
    let descC = document.getElementById('descC');
    let destC = document.getElementById('destC');
    let titD = document.getElementById('titD');
    let imgD = document.getElementById('imgD');

    titI.innerHTML = '';
    imgI.innerHTML = '';
    titC.innerHTML = '';
    descC.innerHTML = '';
    titD.innerHTML = '';
    imgD.innerHTML = '';

    let tI = document.createTextNode(arrIzq[i].titulo);
    titI.appendChild(tI);
    imgI.setAttribute('src', arrIzq[i].img);
    imgI.setAttribute('alt', arrIzq[i].img);

    let tC = document.createTextNode(arrCen[i].titulo);
    titC.appendChild(tC);
    let dC = document.createTextNode(arrCen[i].descripcion);
    descC.appendChild(dC);
    destC.setAttribute('href', arrCen[i].destino);

    let tD = document.createTextNode(arrDer[i].titulo);
    titD.appendChild(tD);
    imgD.setAttribute('src', arrDer[i].img);
    imgD.setAttribute('alt', arrDer[i].img);
    cambioChecked();
}

function cambioChecked(){
    let b0 = document.getElementById('b0');
    let b1 = document.getElementById('b1');
    let b2 = document.getElementById('b2');
    let b3 = document.getElementById('b3');
    let b4 = document.getElementById('b4');
    let b5 = document.getElementById('b5');

    b0.removeAttribute('class');
    b0.setAttribute('class','bi bi-circle');
    b1.removeAttribute('class');
    b1.setAttribute('class','bi bi-circle');
    b2.removeAttribute('class');
    b2.setAttribute('class','bi bi-circle');
    b3.removeAttribute('class');
    b3.setAttribute('class','bi bi-circle');
    b4.removeAttribute('class');
    b4.setAttribute('class','bi bi-circle');
    b5.removeAttribute('class');
    b5.setAttribute('class','bi bi-circle');
    

    let circulo = document.getElementById('b'+i);
    circulo.removeAttribute('class');
    circulo.setAttribute('class','bi bi-circle-fill');
}

function izquierda(a=false) {
    if(a==true){
        clearInterval(auto);
        delay = setTimeout(intervalo, 4000);
    }

    if (i == 0)
        i = 5;
    else
        i--;

    pintar();
}

function derecha(a=false) {
    if(a==true){
        clearInterval(auto);
        delay = setTimeout(intervalo, 5000);
    }

    if (i == 5)
        i = 0;
    else
        i++;

    pintar();
}

function intervalo(){
    auto = setInterval(derecha, 2500);
}

