<?php


class adminControl extends Controller{


    function __construct(){
        parent::__construct();
    }

    function render($ubicacion = null){
        $constr = "dashboard";
        if(isset($ubicacion[0])){
            $this->view->render($constr , $ubicacion[0]);
        }else{
            $this->view->render($constr, 'admin');}
    }

    function enviarPdf($param = null){



        $resp = $this->model->listCita();

        require_once 'util/pdf.php';


        $output = '<img src="http://localhost/cita/public/img/logoufps.png" width="60" height="60" alt="" style="display: inline-block"> <h3 style="display: inline-block;margin-left: 2%">Universidad Francisco de Paula Santander - Citas </h3>';
        $output .= '
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                 <thead class="thead-dark">
                    <tr>
                        <th>Codigo</th>
                        <th>Correo Intitucional</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Titulo</th>
                        <th>Hora de la reunion</th>
                        <th>Tema</th>
                    </tr>
                 <thead>
            <tbody>';
                foreach($resp as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$row["codigo"].'</td>
                        <td>'.$row["correo_institucional"].'</td>
                        <td>'.$row["nombre"].'</td>
                        <td>'.$row["apellido"].'</td>
                        <td>'.$row["title"].'</td>
                        <td>'.$row["start"].'</td>
                        <td>'.$row["descripcion"].'</td>
                    </tr>
                ';
                }
                $output .= ' </tbody>
                </table>
            </div>
            ';

        $file_name = md5(rand()) . '.pdf';
        $html_code = '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';
        $html_code .= $output;
        $pdf = new Pdf();
        $pdf->set_option('isRemoteEnabled', TRUE);
        $pdf->load_html($html_code);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        $file = $pdf->output();
        file_put_contents($file_name, $file);

        require_once "util/correo/Correo.php";
        $email = new Correo();
        $email->cargaCorreo($file_name);
        unlink($file_name);
        return;

    }

}

?>