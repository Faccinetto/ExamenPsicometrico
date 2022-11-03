

let banera=false;
console.log(banera)


$(document).ready(function(){

    
    let ns=0  //$('#conocimiento').val()

    alert(ns)

    ns=$('#conocimiento').val()
    if($('#conocimiento').val()==0){
        $('#conocimiento').val().show
    }else{
        $('#conocimiento').val().hide
    }

    localStorage.setItem("oculto",ns)

    let input=localStorage.getItem("oculto")
    console.log(input)
    
})
function Termi(){
  
  
    window.location.href="/empleos/pages/verExamen.php"
   
}

