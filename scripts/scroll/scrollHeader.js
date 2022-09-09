let ubicacionPrincipal = window.pageYOffset;
window.addEventListener('scroll', ()=>{
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal >= desplazamientoActual){
        document.getElementsByTagName("nav")[0].style.top = "-25px";
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-25px";
    }
    if(desplazamientoActual == 0){
        document.getElementsByTagName("nav")[0].style.top = "0px";
    }
    ubicacionPrincipal = desplazamientoActual;
})

/*Aparecer el menu  */
let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;
let menu = document.querySelectorAll(".menu")[0];
let menubar = document.querySelector(".menubar");
let enlaces = document.querySelector('enlaces');
let body = document.getElementsByTagName('body');
menu.addEventListener('click',()=>{
    if(semaforo){
        enlacesHeader.classList.add('enlace');         
        semaforo = false;
    }else{        
        semaforo = true;
    }
    enlacesHeader.classList.toggle('menudos');
})