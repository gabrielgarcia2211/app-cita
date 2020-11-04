const URLD = "http://localhost/cita/";
var ID;
var nuevaCita;


this.calender();

$('.clockpicker').clockpicker();

function calender(){
   $('#CalendarioWeb').fullCalendar({
      header: {
         left: 'prev,next today',
         center: 'title',
         right: 'month,agendaDay,listWeek'
      },
      events:URLD + "adminControl/getCita/",
      eventClick:function(calEvent,jsEvent,view){
         ID = calEvent.id;
         $("#tituloEvento").html(calEvent.title);
         //inputs
         $("#titulo").val(calEvent.title);
         FechaHora = calEvent.start._i.split(" ");
         $("#fecha").val(FechaHora[0]);
         $("#hora").val(FechaHora[1]);
         $("#descripcion").val(calEvent.descripcion);
         $("#color").val(calEvent.color);
         $("#agregar").css("display", "none");
         $("#editar").css("display", "block");
         $("#eliminar").css("display", "block");
         $("#modalEventos").modal();

      },
      dayClick:function (date,jsEvent,view){
         $("#tituloEvento").html("Agregar nuevo evento");
         $("#titulo").val("");
         $("#hora").val("");
         $("#descripcion").val("");
         $("#color").val("");
         $("#fecha").val(date.format());
         $("#modalEventos").modal();
         $("#agregar").css("display", "block");
         $("#editar").css("display", "none");
         $("#eliminar").css("display", "none");

      }
   });
}

function guardarCita(){

   var titulo = $("#titulo").val();
   var fechaInicio = $("#fecha").val();
   var hora = $("#hora").val() + ":00";
   var descripcion = $("#descripcion").val();
   var color = $("#color").val();
   var textColor = "#FFFFFF";

   //concatenar inicio de cita
   var inicio = fechaInicio + " " +  hora;

   GUI();

   $('#CalendarioWeb').fullCalendar('renderEvent', nuevaCita );
   $("#modalEventos").modal('toggle');

   httpRequest(URLD + "adminControl/addCita/" + titulo + "/" + inicio + "/" + descripcion + "/" + color.slice(1) + "/" + textColor.slice(1), function () {
      var resp = this.responseText;
      Swal.fire({
         title: 'Exito!',
         text: 'Cita agendada',
         icon: 'success',
         confirmButtonText: 'OK'
      })


   });
}

function editarCita(){
   var titulo = $("#titulo").val();
   var fechaInicio = $("#fecha").val();
   var hora = $("#hora").val() + ":00";
   var descripcion = $("#descripcion").val();
   var color = $("#color").val();
   var textColor = "#FFFFFF";

   //concatenar inicio de cita
   var inicio = fechaInicio + " " +  hora;

   httpRequest(URLD + "adminControl/editCita/" + ID +"/" + titulo + "/" + inicio + "/" + descripcion + "/" + color.slice(1) + "/" + textColor.slice(1), function () {
      $('#CalendarioWeb').fullCalendar('refetchEvents');
      $("#modalEventos").modal('toggle');
      var resp = this.responseText;
      Swal.fire({
         title: 'Exito!',
         text: 'Cita reprogramada',
         icon: 'success',
         confirmButtonText: 'OK'
      })


   });
}

function deleteCita(){
   httpRequest(URLD + "adminControl/deleteCita/" + ID , function () {
      $('#CalendarioWeb').fullCalendar('refetchEvents');
      $("#modalEventos").modal('toggle');
      Swal.fire({
         title: 'Exito!',
         text: 'Cita Eliminada',
         icon: 'warning',
         confirmButtonText: 'OK'
      })


   });
}

function GUI(){
   nuevaCita = {
      title:titulo,
      start:inicio,
      descripcion:descripcion,
      color:color,
      textColor:textColor
   }
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




