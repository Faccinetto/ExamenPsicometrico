<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Instrucciones para realizar el examen</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                       Lee con datelle y atencion cada instruccion
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">1) Lea las instrucciones de cada pregunta con cuidado y luego compruebe si las ha entendido correctamente. Cualquier error cometido al marcar su respuesta, hará que se le califique como incorrecta.</a>
                    <a href="#" class="list-group-item list-group-item-action">2) Regule su tiempo de manera adecuada; trate de seguir las sugerencias de tiempo dadas para cada sección y, recuerde que no es la velocidad sino el número de respuestas correctas y el de respuestas incorrectas lo que se tomará en cuenta para la calificación. No pase demasiado tiempo en la misma pregunta. Si no está seguro de la respuesta correcta, abandone y continúe con la siguiente. Al final tendrá tiempo de revisar las preguntas que no haya contestado y de detenerse más tiempo en ellas.</a>
                    <a href="#" class="list-group-item list-group-item-action">3) Puede recurrir a diagramas o esquemas que le ayuden a recordar las respuestas. Trabaje de manera limpia y sistemática, de modo que si tiene algún error pueda apreciar donde lo cometió y no sea necesario repetir todo el problema.</a>
                    <a href="#" class="list-group-item list-group-item-action">4) Asista al examen en las mejores condiciones físicas. Procure descansar lo suficiente la noche anterior y no trate de aprender en un repaso apresurado lo que requiere más de 4 años de estudio.</a>
                </div>

                <div class="form-check mt-5">
                    <input class="form-check-input checksa" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Acepto que leei correctamente las instrucciones
                    </label>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary inicios">Comensar el examen</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modTemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Instrucciones para realizar el examen</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                       Lee con datelle y atencion cada instruccion
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">1) Lea las instrucciones de cada pregunta con cuidado y luego compruebe si las ha entendido correctamente. Cualquier error cometido al marcar su respuesta, hará que se le califique como incorrecta.</a>
                    <a href="#" class="list-group-item list-group-item-action">2) Regule su tiempo de manera adecuada; trate de seguir las sugerencias de tiempo dadas para cada sección y, recuerde que no es la velocidad sino el número de respuestas correctas y el de respuestas incorrectas lo que se tomará en cuenta para la calificación. No pase demasiado tiempo en la misma pregunta. Si no está seguro de la respuesta correcta, abandone y continúe con la siguiente. Al final tendrá tiempo de revisar las preguntas que no haya contestado y de detenerse más tiempo en ellas.</a>
                    <a href="#" class="list-group-item list-group-item-action">3) Puede recurrir a diagramas o esquemas que le ayuden a recordar las respuestas. Trabaje de manera limpia y sistemática, de modo que si tiene algún error pueda apreciar donde lo cometió y no sea necesario repetir todo el problema.</a>
                    <a href="#" class="list-group-item list-group-item-action">4) Asista al examen en las mejores condiciones físicas. Procure descansar lo suficiente la noche anterior y no trate de aprender en un repaso apresurado lo que requiere más de 4 años de estudio.</a>
                </div>

                <div class="form-check mt-5">
                    <input class="form-check-input checksa" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Acepto que leei correctamente las instrucciones
                    </label>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary inicios2">Comensar el examen</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content {
        width: 60vw;
        max-width: 70vw;
        min-width: 70vw;
        transform: translate(-30%);
    }

    h4 {
        margin-bottom: 5%;
        text-align: 4px;
    }
    .form-check-input{
        width: 17px;
        height: 17px;
    }
    .inicios{
        pointer-events: none !important;
        background-color: red;
        opacity: .6;
    }
    .inicios_active{
        pointer-events: painted !important;
        background-color: lightskyblue;
        opacity: 1;
    }
</style>
<script>
    document.querySelector(".checksa").addEventListener("click",habilita)
    let bot= document.querySelector(".inicios");
    let bo1= document.querySelector(".inicios2");

    function habilita(){
        bot.classList.toggle("inicios_active")
    }

    bot.addEventListener("click",e =>{
        window.location.href="/empleos/pages/formExamen.php"
    })
    bo1.addEventListener("click",e =>{
        window.location.href="/empleos/pages/examenPrueba.php"
    })

</script>