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

    <div class="slider-wrap">
        <div class="single-slide" id="slide-1"></div>
    </div>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0" style="background-color: #dd4b39;">
        <div>
            <img src="<?php echo constant('URL')?>public/img/logo.png" alt="Responsive image" style="padding: 5px">
            <span><i class="fas fa-bars fa-lg" style="color: white; padding-left: 20px; cursor: pointer" onclick="openNav()"></i></span>
        </div>
        <div>
            <h4 style="color: white;position: relative;left: -80%" id="usuario">Benvenido, <?php echo $this->data[0]['nombre'] . ' ' . $this->data[0]['apellido'] ;  ?></h4>
        </div>
        <div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="../../loginControl/cerrarSesionEstudiante"><i class="fas fa-sign-out-alt fa-lg" style="color: white;"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="mySidenav" class="sidenav" style="padding-top: 100px; z-index: 10000;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?php echo constant('URL') ?>estudinateControl/render/index"><i class="fas fa-home"></i> Inicio</a></li>
            <li class="list-group-item"><a href="<?php echo constant('URL') ?>estudianteControl/render/agenda"><i class="fas fa-user-tie"></i> Cita</a></li>
            <li style="padding-top: 250px; text-align: center;"><h6>Paginas Institucionales</h6></li>
            <li class="list-group-item"><a href="https://ww2.ufps.edu.co/" target="_blank"> <i class="fas fa-archway"></i> UFPS</a></li>
            <li class="list-group-item"><a href="https://divisist2.ufps.edu.co/" target="_blank"> <i class="fas fa-palette"></i> Divisist</a></li>
            <li class="list-group-item"><a href="https://uvirtual.cloud.ufps.edu.co/" target="_blank"> <i class="fas fa-passport"></i> U-Virtual</a></li>
        </ul>
    </div>

    <div class="container" style="position: relative;background-color: white;top: 20px;height: 630px;border-radius: 7px;-webkit-box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);">
        <br>
        <div>
            <h4>Citas Agendadas</h4>
        </div>
        <br>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #dd4b39;">Titulo</th>
                    <th scope="col" style="background-color: #dd4b39;">Descripcion</th>
                    <th scope="col" style="background-color: #dd4b39;">Comienzo</th>
                    <th scope="col" style="background-color: #dd4b39;">Fin</th>
                    <th scope="col" style="background-color: #dd4b39;">Servicio</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($m = 0; $m < count($this->cita); $m++) : ?>
                    <tr>
                        <?php $NuevaFecha = strtotime('2 hour', strtotime($this->cita[$m]['start']));?>
                        <?php $NuevaFecha =  date ( 'Y-m-d H:i:s' , $NuevaFecha);?>
                        <th scope="row"><?php echo $this->cita[$m]['title'];?></th>
                        <td><?php echo $this->cita[$m]['descripcion'];?></td>
                        <td><?php echo $this->cita[$m]['start'];?></td>
                        <td><?php echo $NuevaFecha;?></td>
                        <td><?php echo $this->cita[$m]['servicio'];?></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
            <button onclick="viewAgenda()" type="button" class="btn btn-info" style="margin-top: 2%">Ver todas</button>
        </div>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small blue" style="position: fixed; bottom: 0px; z-index: 100000; background-color: white; width: 100%">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright: Universidad Francisco de Paula Santander</div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='<?php echo constant('URL')?>public/js/dashboard/script.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


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

</body>
</html>
