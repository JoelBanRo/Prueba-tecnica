<?php 
 
class Persona extends Controlador{
    public  function __construct(){
        $this->ModeloPersona =  $this->modelo('PersonaModel');
        $this->ModeloVehiculo =  $this->modelo('VehiculoModel');
    }

    public function index(){
        $resut = json_encode($this->ModeloPersona->ListarPersonas());
        $resulListVehiculo = $this->ModeloVehiculo->ListarVehiculos();
        $datos = [
            'listaPersona' => $resut,
            'listaVehiculo' => $resulListVehiculo
        ];
        $this->vista('persona/index', $datos);
    }

    public function AgrePersona(){ 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $identificacion = trim($_POST['identificacion']);
            $id_vehiculo = trim($_POST['vehiculo']);
            $datos = [
                'nombres' => trim($_POST['nombre']),
                'apellido' => trim($_POST['apellido']),
                'identificacion' => $identificacion,
                'fecha_nacimiento' => trim($_POST['fecha_nacimiento']),
                'profesion' => trim($_POST['profesion']),
                'casado' => trim($_POST['casado']),
                'ingreso' => trim($_POST['ingreso']),
                'vehiculo' => $id_vehiculo
            ];

            $this->ModeloPersona->AgrePersona($datos);
            $id_persona = $this->ModeloPersona->PersonasDocumento($identificacion);
            $datos =  [
                'id_persona' => $id_persona,
                'id_vehiculo' => $id_vehiculo
            ];
            $resul = $this->ModeloPersona->AgregarHistorial($datos);
            echo json_encode($resul);

        }else{
            $datos =[
                'nombre' => '',
                'email' => '',
                'telefono' => '',
            ];
        }
    }

    public function HistPersVehiculo(){
        $id_persona = $_POST['id_persona'];
        $resul = $this->ModeloPersona->HistPersVehiculo($id_persona);
        echo json_encode($resul);

    }

    public function ObtnPersona(){
        $id_persona = $_POST['id_vehiculo'];
        $resul = $this->ModeloPersona->ObtnPersona($id_persona);

        echo json_encode($resul);
    }

    public function EditPersona(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'nombres' => trim($_POST['nombre']),
                'apellido' => trim($_POST['apellido']),
                'identificacion' => trim($_POST['identificacion']),
                'fecha_nacimiento' => trim($_POST['fecha_nacimiento']),
                'profesion' => trim($_POST['profesion']),
                'casado' => trim($_POST['casado']),
                'ingreso' => trim($_POST['ingreso']),
                'vehiculo' => trim($_POST['vehiculo']),
            ];

            $resul = $this->ModeloPersona->EditPersona($datos);

            echo $resul;
        }
    }

    public function ElimPersona(){
        $id_persona = $_POST['id_persona'];
        $resul = $this->ModeloPersona->ElimPersona($id_persona);
        echo $resul;
    }
}