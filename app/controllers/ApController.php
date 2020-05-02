<?php
namespace App\Controllers;

use App\Core\Controller;
use App\models\Appointment;


/*/**
 * @property Appointment models
 */
class ApController extends Controller
{
    /*public function __construct()
    {
        $this->models = new Appointment();
    }*/

    public function index()
    {
       return view('index.views');
    }

    public  function newAp() {
        return view('new.appointment');
    }

    public function saveAp ()
    {
        $appointment = new Appointment();
        $params = array(
            "nombre" => $_POST["nombre"],
            "email" => $_POST["email"],
            "telefono" => $_POST["telefono"],
            "edad" => $_POST["edad"],
            "talla_calzado" => $_POST["talla_calzado"],
            "altura" => $_POST["altura"],
            "fecha_nacimiento" => $_POST["fecha_nacimiento"],
            "color_pelo" => $_POST["color_pelo"],
            "fecha_turno" => $_POST["fecha_turno"],
            "horario_turno" => $_POST["horario_turno"],
            "diagnostico" => $_FILES,
        );
        var_dump($params);
        $respuesta = $appointment->validar($params);
        $errores = array_shift($respuesta);
        if ($errores == "Correcto") {
            $ap = $appointment->findturno();
            return view('views.appointment', compact('ap')) ;
        }
        elseif ($errores == "Incorrecto") {
            return view('error.views', compact('respuesta'));
        }
        elseif ($errores == "Imagen Pesada") {
            return view('error.views', compact('respuesta'));
        }
    }

    public function listAp() {
        $appointment = new Appointment();
        $appointments = $appointment->all();
        return view('list.appointments', compact('appointments'));
    }

    public function viewAp() {
        $appointment = new Appointment();
        $ap = $appointment->findid($_GET['id']);
        return view('views.appointment', compact('ap'));
    }
}