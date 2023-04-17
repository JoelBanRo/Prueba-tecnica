<?php 

class Vehiculo extends Controlador {
    public function __construct(){
        $this->ModeloVehiculo =  $this->modelo('VehiculoModel');
    }

    public function index(){
        $resut = json_encode($this->ModeloVehiculo->ListarVehiculos());
        $datos = [
            'listaVehiculo' => $resut
        ];
        $this->vista('vehiculo/index', $datos);
    }

    public function AgreVehiculo(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'placa' => trim($_POST['placa']),
                'marca' => trim($_POST['marca']),
                'modelo' => trim($_POST['modelo']),
                'numPuertas' => trim($_POST['numPuertas']),
                'tiVehiculo' => trim($_POST['tiVehiculo']),
            ];

            $resul = $this->ModeloVehiculo->AgreVehiculo($datos);

            echo $resul;
        }
    }


    public function ObtnVehiculo(){
        $id_vehiculo = $_POST['id_vehiculo'];
        $resul = $this->ModeloVehiculo->ObtnVehiculo($id_vehiculo);

        echo json_encode($resul);
    }

    public function EditVehiculo(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'id' => trim($_POST['id']),
                'placaE' => trim($_POST['placaE']),
                'marcaE' => trim($_POST['marcaE']),
                'modeloE' => trim($_POST['modeloE']),
                'numPuertasE' => trim($_POST['numPuertasE']),
                'tiVehiculoE' => trim($_POST['tiVehiculoE']),
            ];

            $resul = $this->ModeloVehiculo->EditVehiculo($datos);

            echo $resul;
        }
    }

    public function ElimVehiculo(){
        $id_vehiculo = $_POST['id_vehiculo'];
        $resul = $this->ModeloVehiculo->ElimVehiculo($id_vehiculo);
        echo $resul;
    }
}

