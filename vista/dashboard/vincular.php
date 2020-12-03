<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Control de citas</title>
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/logoufps.png" />

    <!-- Js -->
    <link href="dashboard.js" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

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
            <span><i class="fas fa-bars fa-lg" style="color: white; padding-left: 20px; cursor: pointer"
                     onclick="openNav()"></i></span>
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
            <li class="list-group-item"><a href="../render/admin"><i class="fas fa-users"></i> Ingenieros</a></li>
            <li class="list-group-item"><a href="../render/servicio"><i class="fas fa-concierge-bell"></i> Servicios</a></li>
            <li class="list-group-item"><a href="../render/vincular"><i class="fas fa-link"></i> Vincular</a></li>
            <li style="padding-top: 250px; text-align: center;">
                <h6>Paginas Institucionales</h6>
            </li>
            <li class="list-group-item"><a href="https://ww2.ufps.edu.co/" target="_blank"> <i class="fas fa-archway"></i> UFPS</a></li>
            <li class="list-group-item"><a href="https://divisist2.ufps.edu.co/" target="_blank"> <i class="fas fa-palette"></i> Divisist</a></li>
            <li class="list-group-item"><a href="https://uvirtual.cloud.ufps.edu.co/" target="_blank"> <i class="fas fa-passport"></i> U-Virtual</a></li>
        </ul>
    </div>

    <div class="container" style="overflow: scroll;position: relative;background-color: white;top: 20px;height: 630px;border-radius: 7px;-webkit-box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);box-shadow: 3px 3px 5px 0px rgba(0,0,0,0.75);">
    <br>
        <div>
            <h4>Agregar Vinculo</h4>
        </div>
        <br>
        <div>
            <form>
                <div class="form-group">
                    <select class="form-control">
                        <option>Ingeniero</option>
                        <option>.......</option>
                        <option>.......</option>
                    </select>
                    <br>
                    <select class="form-control">
                        <option>Servicio</option>
                        <option>.......</option>
                        <option>.......</option>
                    </select>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-danger btn-block btn-flat" style="width: 50%; margin-left: 25%;">Vincular</button>
                </div>
            </form>
        </div>
        <br>
        <div>
            <h4>Vinculos Activos</h4>
        </div>
        <br>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #dd4b39;">Codigo</th>
                        <th scope="col" style="background-color: #dd4b39;">Nombre</th>
                        <th scope="col" style="background-color: #dd4b39;">Servicio</th>
                        <th scope="col" style="background-color: #dd4b39;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Larry</td>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-danger">Remover</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

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
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>