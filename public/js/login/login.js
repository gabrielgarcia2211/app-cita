
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
      var resp = this.responseText;
      if(resp==1){
        window.location.href = URLD + "estudianteControl/render/";
      }else{
        $('.respuesta').text("Datos incorrectos!");
        $('.alert').show();
      }
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
  

