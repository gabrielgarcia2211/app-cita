
//const URLD = "http://agenciacitas.ayd.ingsistemasufps.co/";
const URLD = "http://localhost/cita/";


  //METODO PARA LA VERIFICACION DE DATOS 

  function verificarDatos(e){
    e.preventDefault();
    var codigo = $('#inpCodigo').val();
    var documento = $('#inputDocumento').val();
    var contraseña = $('#inputPassword').val();
    if (!verificarVacio([codigo, documento, contraseña])) {
      $('.respuesta').text("Por favor llene todos los campos!");
      $('.alert').show();
      return;
    }
    $('.alert').hide();
    httpRequest(URLD + "loginControl/validarDatos/" + codigo + "/" + documento + "/" + contraseña, function () {
      var tasks = JSON.parse(this.responseText);

        console.log(tasks[0].rol);
        console.log(tasks[1]);

        if(!tasks[1]){
          $('.respuesta').text("Datos incorrectos!");
          $('.alert').show();
        }else{
          if(tasks[0].rol==1){
            window.location.href = URLD + "adminControl/render/";
          }else if(tasks[0].rol==2){
            window.location.href = URLD + "ingenieroControl/render/";
          } else if(tasks[0].rol==3){
            window.location.href = URLD + "estudianteControl/render/";
          }
        }


     /* if(resp==1){
        window.location.href = URLD + "estudianteControl/render/";
      }else{
        $('.respuesta').text("Datos incorrectos!");
        $('.alert').show();
      }*/
    });
   
  
  }

  function verificarVacio(param){
    for (let i = 0; i < param.length; i++) {
        if(param[i]==""){
            return false;
        }
    }
    return true;
  }

  function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
  }
  

