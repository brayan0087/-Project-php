//console.log(document.querySelector("a"));
//console.log(document.getElementById("menu"));


/* const $prueba = document.querySelector(".entrada");

console.log($prueba.className);
console.log($prueba.classList);

console.log($prueba.classList.contains("rotate-45"));
$prueba.classList.add("rotate-45");
console.log($prueba.classList.contains("rotate-45"));

$prueba.classList.remove("rotate-45");
console.log($prueba.classList.contains("rotate-45"));


$prueba.classList.toggle("rotate-45");
console.log($prueba.classList.contains("rotate-45"));




$prueba.classList.replace("rotate-45","rotate-135");

console.log($prueba.classList.contains("rotate-135"));


$prueba.classList.add("opacity-80","sepia");
 */

//interactuar con contenido textual y selectores





/* let $prueba =document.getElementById("prueba");

 
let texto = " lorem ipsum dolor sit amet, consectet "; 

    
$prueba.innerHTML = texto;

 */


//const $cards = document.querySelector(".principal");

/* console.log($cards);

console.log($cards.children[2]);
console.log($cards.parentElement);
console.log($cards.firstElementChild);
console.log($cards.lastElementChild);
console.log($cards.firstElementChild);
 */

//console.log($cards.childNodes);
//console.log($cards.closest);


//console.log($cards.children);

//console.log($cards.childNodes);


//console.log($cards.children[2].closest("article"));


/* let $articulo = document.querySelector(".principal");



const $article =document.createElement("article");
$article.setAttribute("class","entrada");

const $a =document.createElement("a");
$a.setAttribute("href","index.html");

const $h2 =document.createElement("h2");
let $texth2 =document.createTextNode("Titulo De Mi Entrada") 
$h2.appendChild($texth2);
const $p =document.createElement("p");
$p.setAttribute("id","prueba");
let $parraftext =document.createTextNode("Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga quas sunt aliquam asperiores a perspiciatis Eius nemo inventore corrupti non veritatis quasi nesciunt repellat nihil. Assumenda maxime voluptas ipsa reprehenderit"); 
$p.appendChild($parraftext);

let $domw = document.querySelector(".entrada");

$articulo.insertBefore($article,$domw); 

$article.appendChild($a);
$a.appendChild($h2);
$a.appendChild($p); */




//templatees


/* const $card = document.querySelector(".card"),
$template =document.getElementById("template-card").content,

$fragment = document.createDocumentFragment(),
cardContent =[

    {
        title:"Tecnologia",
        img:"https://placeimg.com/200/200/tech",
    },

    {
        title:"Animales",
        img:"https://placeimg.com/200/200/animals",
    },

    
    {
        title:"Arquitectura",
        img:"https://placeimg.com/200/200/arch",
        
    }

] 

cardContent.forEach(el => {
    $template.querySelector("img").setAttribute("src",el.img);
    $template.querySelector("img").setAttribute("alt",el.title);
    $template.querySelector("figcaption").textContent = el.title;



    let $clone = document.importNode($template,true);
    $fragment.appendChild($clone);
    

});

$card.appendChild($fragment);

 */

 

/* const $caja = document.querySelector(".principal"),

$article = document.createElement("article");
//const $cloneCaja = $caja.cloneNode(true); //clona una seccion completa

$article.classList.add("perro");

$article.innerHTML =  "<a href=''> <h2>Titulo De Mi Entrada </h2> <p id='prueba'> Lorem ipsum dolor sit amet consectetur adipisicing elit.  Fuga quas sunt aliquam, asperiores a perspiciatis. Eius nemo inventore  corrupti non veritatis quasi nesciunt repellat nihil.  Assumenda maxime voluptas ipsa reprehenderit. </p> </a>";  */


//$caja.replaceChild($article,$caja.children[2]);  //remplazar la posicion


//$caja.insertBefore($article,$caja.children[2]); //insertar despues de 



//$caja.removeChild($caja.lastElementChild); //elimina la posicion


//$caja.insertBefore($cloneCaja,$caja.children[4]); // inserta en el body el clon 


/* const $caja = document.querySelector(".principal"),

$article = document.createElement("article");

$article.classList.add("entrada");

let $contetarticle =  "<a href=''> <h2>Titulo De Mi Entrada </h2> <p id='prueba'> Lorem ipsum dolor sit amet consectetur adipisicing elit.  Fuga quas sunt aliquam, asperiores a perspiciatis. Eius nemo inventore  corrupti non veritatis quasi nesciunt repellat nihil.  Assumenda maxime voluptas ipsa reprehenderit. </p> </a>";


$article.insertAdjacentHTML("beforeend",$contetarticle); */


//$caja.insertAdjacentElement("afterbegin", $article); 



//metodos de jquery nativos en javascript

//$caja.prepend($article);

//$caja.append($article);

//$caja.after($article);

//manejadores de eventos

//1 

/* function holaMundo() {   //manejador de eventos 
alert("Hola Mundo");
console.log(event);
}



//2 manejador semantico

const $eventosemantico = document.getElementById("evento-semantico");

$eventosemantico.onclick = holaMundo;



//3 con funcion anonima

$eventosemantico.onclick = function (){
    alert("perro");
    console.log(event);
}


//4 manejador multiple
{
    const $eventomultiple = document.getElementById("evento-multiple");
    
    $eventomultiple.addEventListener("click",holaMundo);
    $eventomultiple.addEventListener("click",(e)=>{
        alert("manejador de eventos multiples");
        console.log(e);
        console.log(e.type);
        console.log(e.target);
    });
} */


//eventos con parametros y remover eventos 


//4 manejador multiple
/* function saludar (nombre ="desconocid@") {
    alert("hola "+nombre);
}
  


    const $eventomultiple = document.getElementById("evento-multiple");
    
    //$eventomultiple.addEventListener("click",holaMundo);
    $eventomultiple.addEventListener("click",(e)=>{
        alert("manejador de eventos multiples");
        console.log(e);
        console.log(e.type);
        console.log(e.target);
    });



$eventomultiple.addEventListener("click",()=>{
    
   saludar();
   saludar("jhon");
   saludar("brayan");
});

//eliminar evento de un elemento
const  $eventoremove = document.getElementById("evento-remover");

const removerdobleclic = (e)=>{

alert ("Removiendo el evento");
$eventoremove.removeEventListener("dblclick",removerdobleclic);
$eventoremove.disabled = true;
}


$eventoremove.addEventListener("dblclick",removerdobleclic); */



//flujo de eventos (Burbuja y captura)




//clase pendiente de propagacion


//prevent default event
/* $linkeventos=document.querySelector("#ver-todas a");

$linkeventos.addEventListener("click",(e)=>{

    alert ("Hola perro");
    e.preventDefault();//quita la accion por defecto del elemento ejemplo <a>
    

    

}) */


//delegacion de los  eventos 
/* 
document.addEventListener("click",(e)=>{

console.log("Click en ",e.target);

if (e.target.matches("#ver-todas")) {
    
    console.log("simulacion function flujo eventos");
}

if (e.target.matches("#ver-todas a")){

    alert ("Hola perro");
    e.preventDefault();//quita la accion por defecto del elemento
}
 
}); */


//BOM propiedades y eventos
/* window.addEventListener("resize",e=>{
    console.clear();
    console.log("**********Evento Resize************");
    console.log(window.innerWidth);
    console.log(window.innerHeight);
    console.log(window.outerWidth);
    console.log(window.outerHeight);
    console.log(e);

});


window.addEventListener("scroll",(e)=>{
    console.clear();
    console.log("**********Evento Scroll************");
    console.log(window.scrollX);
    console.log(window.scrollY);
    console.log(e);

});




window.addEventListener("load",(e)=>{
    
    console.log("**********Evento load************");
    console.log(window.screenX);
    console.log(window.screenY);
    console.log(e);

});

//domcontent es una mejor practica sobre todo cuando se hacen peticiones asyncronas 
document.addEventListener("DOMContentLoaded",(e)=>{
    
    console.log("**********Evento DOMLOADED************");
    console.log(window.screenX);
    console.log(window.screenY);
    console.log(e);
});
 */


//metodos



/* const $abrir = document.getElementById("abrir-ventana"),
 $cerrar = document.getElementById("cerrar-ventana"),
 $imprimir = document.getElementById("impirmir-ventana");
 let ventana; 
 $abrir.addEventListener("click",(e)=>{
    ventana = window.open("http://localhost/xampp/ProyectoPhp/index.php");

 });


 $cerrar.addEventListener("click",(e)=>{

    //window.close();
    ventana.close();

 });

 $imprimir.addEventListener("click",(e)=>{
    //window.print();
    

 });  */


 // objetos url ,historial y navegador 




/*  console.log("objeto URL (location)");

console.log(location)

 */

//console.log(navigator);
//console.log(navigator.geolocation);









