



let psico=document.querySelector(".psicometricos")
let mode=document.querySelector(".desbll")

let banera=false;
console.log(banera)
 /*
 let alerta=document.querySelector(".ver");
let en=document.querySelector(".acce");
let bfi=document.querySelector(".term").addEventListener("click", activa)
en.addEventListener("click",e =>{
    window.location.href="/empleos/pages/verExamen.php"
});
alerta.addEventListener("click",e =>{
    window.alert("Para habilitar el boton comensar el examen debe aceptar que leyo correctamente las instucciones")
});
mode.addEventListener("click",e =>{
    alert("H")
    window.location.href="/empleos/pages/verExamen.php"
    banera=true
    console.log(banera)
    psico.classList.toggle("psicometrico_active")
})
*/

$(document).ready(function(){

    let ns=$('#ocul').val()
    localStorage.setItem("oculto",ns)
    let input=localStorage.getItem("oculto")
    console.log(input)
    
})
function Termi(){
  
  
    window.location.href="/empleos/pages/verExamen.php"
   
}

