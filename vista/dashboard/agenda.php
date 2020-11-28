<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Agenda Citas</title>
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logoufps.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


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



    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


    <!-- jQuery and JS bundle w/ Popper.js -->

    <!-- Custom styles for this template -->
    <link href="<?php echo constant('URL')?>public/css/dashboard/dashboard.css" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>



</head>

<body>
<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0" style="background-color: #dd4b39;padding: 5px">
    <div>
        <img src="<?php echo constant('URL')?>public/img/logo.png" alt="Responsive image" style="padding: 5px">
        <span><i class="fas fa-bars fa-lg" style="color: white; padding-left: 20px;" onclick="openNav()"></i></span>
    </div>
    <div>
        <h4 style="color: white;position: relative;left: -80%" id="usuario">Benvenido, <?php echo $this->data[0]['nombre'] . ' ' . $this->data[0]['apellido'] ;  ?></h4>
    </div>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="../../loginControl/cerrarSesionEstudiante"><i class="fas fa-sign-out-alt fa-lg" style="color: white;"></i></a>
        </li>
    </ul>
</nav>

<div id="mySidenav" class="sidenav" style="padding-top: 100px; z-index: 10000;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="list-group">
        <li class="list-group-item"><a href="../render/index"><i class="fas fa-home"></i> Inicio</a></li>
        <li class="list-group-item"><a href="../render/agenda"><i class="fas fa-user-tie"></i> Cita</a></li>
        <li style="padding-top: 250px; text-align: center;"><h6>Paginas Institucionales</h6></li>
        <li class="list-group-item"><a href="https://ww2.ufps.edu.co/" target="_blank"> <i class="fas fa-archway"></i> UFPS</a></li>
        <li class="list-group-item"><a href="https://divisist2.ufps.edu.co/" target="_blank"> <i class="fas fa-palette"></i> Divisist</a></li>
        <li class="list-group-item"><a href="https://uvirtual.cloud.ufps.edu.co/" target="_blank"> <i class="fas fa-passport"></i> U-Virtual</a></li>
    </ul>
</div>

<div>

</div>


<div class="container" id="contenedor" style="margin-top: 2%">

    <h2>Control de Citas</h2> <button onclick="viewTabla()" type="button" class="btn btn-info" style="margin-top: 2%;margin-bottom: 2%">Volver</button>
    <div class="card">
        <div class="card-header bg-transparent">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Cita</h6>
                    <h5 class="h3 mb-0">Agendar Cita</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="CalendarioWeb"></div>
        </div>
    </div>

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


<footer class="page-footer font-small blue" style="position: fixed; bottom: 0px; z-index: 100000; background-color: white; width: 100%">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Universidad Francisco de Paula Santander</div>
    <!-- Copyright -->

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src='<?php echo constant('URL')?>public/js/dashboard/script.js'></script>


<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "270px";
        document.getElementById("main").style.marginLeft = "270px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
</body>
</html>