// Make sure you have a js.jquery file before using these


// This code will disable mouse click
$(document).ready(function () { 
    //Disable full page 
    $("body").on("contextmenu",function(e){ 
        return false; 
    }); 
     
    //Disable part of page 
    $("#id").on("contextmenu",function(e){ 
        return false; 
    }); 
}); 
 


// Disable Cut Copy & Paste
$(document).ready(function () { 
    //Disable full page 
    $('body').bind('cut copy paste', function (e) { 
        e.preventDefault(); 
    }); 
     
    //Disable part of page 
    $('#id').bind('cut copy paste', function (e) { 
        e.preventDefault(); 
    }); 
}); 



 

// Disable Mouse Right Click, Cut, Copy & Paste
$(document).ready(function () { 
    //Disable cut copy paste 
    $('body').bind('cut copy paste', function (e) { 
        e.preventDefault(); 
    }); 
    
    //Disable mouse right click 
    $("body").on("contextmenu",function(e){ 
        return false; 
    }); 
}); 
