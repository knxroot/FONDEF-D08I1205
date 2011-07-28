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
        //var resultadoFila = $(this).parent().parent().find('input.resultado-fila');
        if($.trim($(this).val())==""){$(this).val('0');}

        
        var name=$(this).attr('name');
        var patron=name.substr(0, name.length - 1);
        //var suma=$("'#"+patron+"2'").val();
        var suma=0;
        
        for(var i=1; i<=7; i++){
            var v=parseInt($('input[name="'+patron+i+'"]').val());
            if(isNaN(v+0)){v=0;}
            suma=suma+v;
        }
        $(this).parent().parent().find('input.resultado-fila').val(suma);

       // block1-F1C1
        var nbloque=name.substr(5, 1);
        var dec=name.substr(9, 1);
        var nfila=name.substr(8, 2);
        var ncol=name.substr(name.length - 1, 1);
        

        if(dec=="C"){nfila=name.substr(8, 1);}
        
        
       // alert("FILAAAA"+nfila); //F19C2
        //alert("COL"+ncol);
        //alert(nbloque);
        
       // var patron2=p2+'XX'+p3;
        
        var t=true;
        var suma2=0;
        var i=1;
            
        while(t)
        {
          var as=$('input[name="block'+nbloque+'-F'+i+'C'+ncol+'"]').attr('value');
              //alert('input[name="block'+nbloque+'-F'+i+'C'+ncol+'"]');
          if(as==undefined){
              t=false;
          }
          var v=parseInt(as);

          if(isNaN(v+0)){v=0;}
          suma2=suma2+v;
          //if(i>5){t=false;}
          i++;

        }
        /*block1-resultadoC1
        input[name="block1-resultadoC1"]*/
        
       // alert('input[name="block'+nbloque+'-resultadoC'+ncol+'"]');

        $('input[name="block'+nbloque+'-resultadoC'+ncol+'"]').val(suma2);

        /*
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
        base.find('input.resultado-diag').val(totalCols(base.find('input.resultado-col')))*/
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
