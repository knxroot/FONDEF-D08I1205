$(document).ready(function(){
    var interval;
    var totalTime = 0;
    var started = false;
    var location = typeof(page_hash) != 'undefined' ? 
        page_hash : document.location.href
    var cookieName = 'at-' + location;
    
    if($.cookie(cookieName)) {
        totalTime = $.cookie(cookieName);
    }
    
    $(window)
    .focus(function(){
        interval = setInterval(function(){
            totalTime++;
        }, 1000);
    })
    .blur(function(){
        clearInterval(interval);
    })
    .load(function(){
        if(!started){
            $(this).trigger('focus');
            started = true;            
        }
    })
    .unload(function(){
        clearInterval(interval);
        $.cookie(cookieName, totalTime);
    })
});
