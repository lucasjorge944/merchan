function functionMenu(){$(document).ready(function(){$(window).scroll(function(){if($(window).scrollTop()==0&&document.documentElement.clientWidth>=1119){$(".topBar").show();$(".menuBar").css({"position":"relative","transition":"1s","width":"auto","padding-left":"10%","height":"85px"});}
else if($(window).scrollTop()>=20&&document.documentElement.clientWidth>=1119){$(".topBar").hide();$(".menuBar").css({"position":"fixed","transition":"0.5s","width":"100%","z-index":"1000","padding":"0","padding-left":"5%","background-color":"white","height":"85px"});}});});};function scrollWin(){$("html, body").animate({scrollTop:0},1000);}
$(document).ready(function(){$(".mcode").click(function(){$('html, body').animate({scrollTop:$("#mcode").offset().top},1000);});$(".controla").click(function(){$('html, body').animate({scrollTop:$("#controla").offset().top},1000);});$(".empresa").click(function(){$('html, body').animate({scrollTop:$("#empresa").offset().top},1000);});$(".funciona").click(function(){$('html, body').animate({scrollTop:$("#funciona").offset().top},1000);});$(".vantagens").click(function(){$('html, body').animate({scrollTop:$("#vantagens").offset().top},1000);});$(".clientes").click(function(){$('html, body').animate({scrollTop:$("#clientes").offset().top},1000);});$(".fale").click(function(){$('html, body').animate({scrollTop:$("#fale").offset().top},1000);});$(".contato").click(function(){$('html, body').animate({scrollTop:$("#contato").offset().top},1000);});});