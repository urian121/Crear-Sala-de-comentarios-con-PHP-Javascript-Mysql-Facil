

https://www.w3schools.com/howto/howto_css_loader.asp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(function(){
$(window).load(function() {
   $(".cargando").fadeOut(50);
     });  
});

(window).on('load', function () {
    $('.outer-loader').delay(1000).fadeOut('slow');
});


 $("#toggle").click(function () {
            loader.show();
            setTimeout(function () {
                loader.hide();
            }, 3000)
        })


    $(document).ready(function() {    
    $('.button').on('click', function(){
        //Añadimos la imagen de carga en el contenedor
        $('#content').html('<div class="loading"><img src="images/loader.gif" alt="loading" /><br/>Un momento, por favor...</div>');
 
        $.ajax({
            type: "POST",
            url: "ajax.php",
            success: function(data) {
                //Cargamos finalmente el contenido deseado
                $('#content').fadeIn(1000).html(data);
            }
        });
        return false;
    });              
});    




$( "#div").load( "url", function( response, status, xhr ) {
    ////how can I get the false result here response.ok return nothing!!!
    console.log(response.ok);
    if ( status == "error" ) {
        var msg = "Sorry but there was an error: ";
        $( "#div" ).html( msg + xhr.status + " " + xhr.statusText );
    }
});


$(document).ready(function(){
            $("button").click(function(){
                $("#div_content").load("gfg.txt", function(response,
                                                         status, http){
                    if(status == "success")
                        alert("Content loaded successfully!");
                    if(status == "error")
                        alert("Error: " + http.status + ": " 
                                                       + http.statusText);
                });
            });
        });


$("#div1").load("demo_test.txt", function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
      alert("External content loaded successfully!");
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });


$("button").click(function(){
$("#div1").load("demo_test.txt",function(responseTxt,statusTxt,xhr){
if(statusTxt=="success")
alert("外部内容加载成功!");
if(statusTxt=="error")
alert("Error: "+xhr.status+": "+xhr.statusText);
});
});




$('#news').load('news.html h3', function(responseText, responstStatus, responseObj) {
        console.log(responseText);
        console.log(responstStatus);
        console.log(responseObj);
    })


$( "#result" ).load( "ajax/test.html", function() {
  alert( "Load was performed." );
});


$( "#new-projects" ).load( "/resources/load.html #projects li" );



</script>