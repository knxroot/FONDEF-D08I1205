
<!-- Mensaje Guardando...-->
<div id="msg-guardando" class="msg-guardando">
    <div class="grid-4-12"></div>
    <div class="grid-4-12"><?php echo image_tag('loading-image.gif','style=float:left;') ?><h3>Guardando...</h3></div>
    <div class="grid-4-12"></div>
</div>
<div class="clear"></div>

<!-- Logica de formulario -->
<script type="text/javascript">
    var mostrarInstrucciones = <?php echo $iniciado ? 'false' : 'true' ?>;
    
    if(mostrarInstrucciones == null) { 
        var mostrarInstrucciones = false;
        $('.page-main-form').hide();
        alert("Al parecer ha habido un problema de conexión, es recomendable que recarge la página");
    }

    if(mostrarInstrucciones){
        $('.page-main-form').hide();        
    }

    $("#dialogo-instrucciones").dialog("destroy");
    $("#dialogo-instrucciones").dialog({
        height: 373,
        width: 960,
        modal: true,
        autoOpen: mostrarInstrucciones,
        closeText: 'Cerrar',
        draggable: false,
        show: 'slide',
        buttons: {
            Ok: function() {
                if($('#LeiLasInstrucciones').attr("checked")){
                    $(this).dialog('close')
                }
                else{
                    alert("Debes declarar haber leido las instrucciones primero. Haz click en el botón inferior.");
                }
            }
        },
        beforeClose: function(event, ui) {
            $('.page-main-form').show();
        }
    });
    
    $('.page-main-form').submit(function(event){
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            timeout: 5000,
            beforeSend: function(xhr, settings){
            },
            success: function(data, status, xhr){            
            },
            error: function(xhr, status, errorType){            
            },
            complete: function(xhr, status){            
            }
        });
        return false;
    });
</script>
