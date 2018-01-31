$(document).ready(function(){
  setTimeout(function(){//da la duracion de la animacion
    $("#spplash").fadeOut(1500);//declara el tiempo
  },3000);//3 seg. lo que va tardar en esconderse

  setTimeout(function(){//va a mostrar la otra pantalla
    $(".screen-login").fadeIn(1500);//para mostrar
  },3000);
});
