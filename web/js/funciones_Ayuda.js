$(document).ready(function(){
    $.each($('.app-context-help'), function(index, item){
        var element = $(item);
        var url = element.attr('data');
        var link = $('<a>');
        var x = element.offset().left;
        var y = element.offset().top;
        
        element
            .css({display: 'inline-block'})
        
        link
            .addClass('context-help-button')
            .appendTo(element.parent())
    })
});
