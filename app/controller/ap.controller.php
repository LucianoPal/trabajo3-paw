<?php
namespace Appcontroller;

use App\core\Controller;
use App\model\Appointment;
use App\model\Serialize;

/*/**
 * @property Appointment model
 */
class ApController extends Controller
{
    /*public function __construct()
    {
        $this->model = new Appointment();
    }*/

    public function index()
    {
        return view('view/index.view.php');
    }

    public  function newAp() {
        return view('view/new.appointment.php');
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

        $respuesta = $appointment->validar($params);
        $respuesta_2 = array_shift($respuesta);
        if ($respuesta_2 == "Correcto") {
            $ap = $appointment->findturno();
            return view('view/view.appointment', compact('ap')) ;
        }
        else {
            return view('view/error.view', compact('respuesta_2'));
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
        return view('view/view.appointment.php', compact('ap'));
    }
}