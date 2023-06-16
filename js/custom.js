
  (function ($) {
  
  "use strict";

    // NAVBAR
    $('.navbar-nav .nav-link').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
    
  })(window.jQuery);

function checktimeval(){
  var timeval=*document.getElementById("theidofurinput").value*;
  if(!(timeval > 1 && timeval < 12)){
    document.getElementById("theidoferrorspan").innerHTML="Please enter time <7 a.m and >6 p.m";
  }
}
