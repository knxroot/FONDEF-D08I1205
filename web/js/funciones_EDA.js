var EDA = function() {
    this.buildUI()
    this.addEvents()
}

EDA.prototype.buildUI = function() {
    $('#tabPanel').tabs({ fx: { opacity: 'toggle' }});
}

EDA.prototype.addEvents = function() {
    this.formTablaCruzada('table.x-eda-1-table');
    this.formTablaCruzada('table.x-eda-2-table');
    this.formTablaCruzada('table.x-eda-3-table');
}

EDA.prototype.formTablaCruzada = function(selector) {
    var base = $(selector);    
    base.find('input.resultado-fila, input.resultado-col, input.resultado-diag').val(0)
    base.find('input.preg-val')
    .change(function(event) {        
        var resultadoFila = $(this).parent().parent().find('input.resultado-fila');
        if($.trim($(this).val())==""){$(this).val('0');
        var name=$(this).attr('name');
        var patron=name.substr(0, name.length - 1);
        var suma=$("'#"+patron+"1'").val();
        alert(suma);
        }
        var r1=parseInt(resultadoFila.val()) + parseInt($(this).val(), 10);
        if(isNaN(r1)){r1=0;}
        resultadoFila.val(r1);            
        var coord = $(this).attr('class').split(' ')[1];
        var col = coord.split('-')[1];               
        var resultadoCol = base.find('input.col-' + col); 
        var r2=parseInt(resultadoCol.val()) + parseInt($(this).val(), 10);
        if(isNaN(r2)){r2=0;}
        resultadoCol.val(r2);            
        var totalCols = function(e) {
            var total = 0;
            $.each(e, function(i, v) {
                total += parseInt($(v).val())
            });            
            return total;        
        }
        base.find('input.resultado-diag').val(totalCols(base.find('input.resultado-col')))
    })
    .keypress(function(event){
        return (event.which!=8 && event.which!=0 && (event.which<48 || event.which>57)) ? false : true ;
    })
}

$(document).ready(function(){ new EDA();
$('form').submit(function(){
     
        $('#msg-guardando').show();

    });
    
    });
