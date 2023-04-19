<?php 

class VehiculoModel { 
    private $db;

    public function __construct(){
        $this->db = new Base;
    }

    public function ListarVehiculos(){
        $this->db->query("SELECT * FROM vehiculo");
        return $this->db->registros();
    }

    public function AgreVehiculo($datos){
        $this->db->query("INSERT INTO vehiculo(placa, marca, modelo, numero_puertas, tipo_vehiculo) VALUES (:placa, :marca, :modelo, :numPuertas, :tiVehiculo)");

        $this->db->bind(':placa', $datos['placa']);
        $this->db->bind(':marca', $datos['marca']);
        $this->db->bind(':modelo', $datos['modelo']);
        $this->db->bind(':numPuertas', $datos['numPuertas']);
        $this->db->bind(':tiVehiculo', $datos['tiVehiculo']);


        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }
 

    public function ObtnVehiculo($id_vehiculo){
        $this->db->query("SELECT * FROM vehiculo WHERE id = $id_vehiculo");
        return $this->db->registros();
    }

    public function EditVehiculo($datos){
        $this->db->query('UPDATE vehiculo SET placa = :placa, marca = :marca, modelo = :modelo, numero_puertas = :numPuertasE, tipo_vehiculo = :tiVehiculoE WHERE id = :id');

        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':placa', $datos['placaE']);
        $this->db->bind(':marca', $datos['marcaE']);
        $this->db->bind(':modelo', $datos['modeloE']);
        $this->db->bind(':numPuertasE', $datos['numPuertasE']);
        $this->db->bind(':tiVehiculoE', $datos['tiVehiculoE']);


        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }


    public function ElimVehiculo($id_vehiculo){
        $this->db->query("DELETE FROM vehiculo WHERE id = $id_vehiculo");
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }
}