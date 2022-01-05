

const text = document.querySelectorAll(".text");
let delay = 0;
text.forEach(el=>{
  el.style.animation = "fade-in 1s ease forwards";
  el.style.animationDelay= delay +"s";
  delay += 0.20;
}); 



//Enviando msjs a BD
$(function(){
  //envio el scroll a la parte final de los comentarios
  $(".chat-texts").animate({ scrollTop: $('.chat-texts')[0].scrollHeight}, 1000);

  $(".formSend").keypress(function(e) {
    if(e.which == 13) {
        var url = "SendMsjs.php";
            $.ajax({
               type: "POST",
               url: url,
               data: $("#formSend").serialize(),
                complete:function(data){
                 scrollMsjs(); //llamando la funcion
                 $(".audio")[0].play();  //reproducir audio de envio
                },
               success: function(data){
                  $(".chat-texts").load( "msjs.php", function() { });
                  $("#formSend")[0].reset();
               }
             });
            return false;
      }
    });

  });

  function scrollMsjs(){
    var scrolltoh = $('.chat-texts')[0].scrollHeight;
    $('.chat-texts').scrollTop(scrolltoh);
}

//Refrescando los chats o mensajes de la sala de comentarios
function atualizar(){
    $.post('msjs.php', function (data) {
            $('.chat-texts').html(data);
        });
    }
   setInterval("atualizar()", 3000); 


/* para cerra ventana modal
$("#closeModal").on('click', function(e){
  e.preventDefault();
  $('.modal-container').removeClass('showModal'); //Mostar Modal
}); */