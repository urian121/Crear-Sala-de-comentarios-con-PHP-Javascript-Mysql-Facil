
const text = document.querySelectorAll(".text");
let delay = 0;
text.forEach(el=>{
  el.style.animation = "fade-in 1s ease forwards";
  el.style.animationDelay= delay +"s";
  delay += 0.20;
});

//Enviando msjs a BD
$(function(){
  $(".formSend").keypress(function(e) {
    if(e.which == 13) {
        var url = "SendMsjs.php";
            $.ajax({
               type: "POST",
               url: url,
               data: $("#formSend").serialize(),
                complete:function(data){
                 //scrollMsjs(); //llamando la funcion
                },
               success: function(data){
                $.get("msjs.php", function(data){
                  $('.chat-texts').html(data);
                  //$('.chat-texts').html(data);
                });

                /*  $.post("hola.php", function (data) {
                    $(".chat-texts").html(data);
                  }); */

                //$('#resp').html(data);
                 //$('#conversation').html(data);
                 // $(".audio")[0].play();  //reproducir audio de envio
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