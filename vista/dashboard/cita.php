
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <title>Agenda de Citas</title>

    <link href='<?php echo constant('URL')?>public/css/calender/fullcalendar.min.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL')?>public/css/calender/bootstrap-clockpicker.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src='<?php echo constant('URL')?>public/js/calender/moment.min.js'></script>
    <script src='<?php echo constant('URL')?>public/js/calender/jquery.min.js'></script>
    <script src='<?php echo constant('URL')?>public/js/calender/fullcalendar.min.js'></script>
    <script src="<?php echo constant('URL')?>public/js/calender/bootstrap-clockpicker.js"></script>
    <script src='<?php echo constant('URL')?>public/js/calender/es.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>

    <body>
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- Modal (editar, eliminar)-->
    <div class="modal fade" id="modalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="descripcionEvento">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <form>
                                        <div class="form-group">
                                            <label for="fecha">Fecha</label>
                                            <input class="form-control" type="text" name="fecha" id="fecha" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="titulo">Titulo</label>
                                            <input class="form-control" type="text" name="titulo" id="titulo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Servicio</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <?php for ($m = 0; $m < count($this->servicio); $m++) : ?>
                                                <option class="dropdown-item" href="#" value="<?php echo $this->servicio[$m]['id'];?>"><?php echo $this->servicio[$m]['descripcion'];?></option>
                                                <?php endfor; ?></a>
                                            </select>
                                        </div>

                                        <div class="input-group clockpicker contenedor" data-autoclose="true"  style="margin-top: 2%">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                            </div>
                                            <button onclick="getHorario()" type="button" class="btn btn-primary form-control" id="hora">Horario Disponibles</button>
                                        </div>
                                        <div class="form-group" style="margin-top: 2%">
                                            <label for="descripcion">Descripcion</label>
                                            <textarea class="form-control" id="descripcion" rows="2"></textarea>
                                        </div>
                                        <div class="form-group" style="width: 30%">
                                            <label for="color">Color</label>
                                            <input class="form-control" type="text"  name="color" id="color"  value="#8080ff" disabled>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none">
                                            <strong id="contError"></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="guardarCita()" type="button" class="btn btn-primary" id="agregar">Agregar</button>
                    <button onclick="editarCita()" type="button" class="btn btn-success" data-dismiss="modal" id="editar">Editar</button>
                    <button onclick="deleteCita()" type="button" class="btn btn-danger" id="eliminar">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src='<?php echo constant('URL')?>public/js/dashboard/script.js'></script>

</body>

</html>

