<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>



    <div id="conversation"> - - ---</div>
    <div id="programador"> .. . ... .... </div>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
var suma = 0;
 var bucle = setInterval(function(){
        suma++;
        console.log(suma);
        if(suma == 5){
            suma = 0; //Reinicio el conteo nuevamente
           // clearInterval(bucle); //clearInterval() que sirve para detener el bucle
        }
    },1000);


function atualizar(){
    $.post('hello.php', function (data) {
            $('#programador').html(data);
        });
    }
   setInterval("atualizar()", 2000);
  //llamo la funcion entre comillas y con el parentesis

/*   
function load(){
   $.post('hello.php',  function(data) {
    $('#conversation').html(data);
   });
}
setInterval(load, 500)
//llamo la funcion con solo el nombre sin parentesis ni comillas


function users(){
    load_data = {'fetch':1};
  window.setInterval(function(){
  $.post('users.php', load_data,  function(data) {
     $('#myusers').html(data);
   });
  }, 10000);
}

//users();
*/

</script>


    </body>
</html>