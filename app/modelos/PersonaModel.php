<?php 
  
 class PersonaModel{
    private $db;

    public function __construct(){
        $this->db = new Base;
    }

    public function ListarPersonas(){
        $this->db->query("SELECT * FROM persona");
        return $this->db->registros();
    }

    
    public function AgrePersona($datos){
        $this->db->query("INSERT INTO persona(nombres, apellidos, fecha_nacimiento, identificacion, profesion_oficio, es_casado, ingresos_mensuales, vehiculo_actual) VALUES (:nombres, :apellidos, :fecha_nacimiento, :identificacion, :profesion_oficio, :es_casado, :ingresos_mensuales, :vehiculo_actual)");

        $this->db->bind(':nombres', $datos['nombres']);
        $this->db->bind(':apellidos', $datos['apellido']);
        $this->db->bind(':fecha_nacimiento', $datos['fecha_nacimiento']);
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':profesion_oficio', $datos['profesion']);
        $this->db->bind(':es_casado', $datos['casado']);
        $this->db->bind(':ingresos_mensuales', $datos['ingreso']);
        $this->db->bind(':vehiculo_actual', $datos['vehiculo']);

        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
        
    }

    public function PersonasDocumento($identificacion)
    {
        $this->db->query("SELECT id AS Id_Persona FROM persona WHERE  identificacion = '$identificacion'");
        $resultados = $this->db->registro();
        return $resultados;
    }

    public function HistPersVehiculo($id_persona){
        $this->db->query("SELECT * FROM historial INNER JOIN vehiculo on historial.id = vehiculo.id where id_persona = $id_persona");
        return $this->db->registros();
    }

    public function AgregarHistorial($datos){
        $this->db->query("INSERT INTO historial (id, id_persona, id_vehiculo) VALUES (NULL, :id_persona, :id_vehiculo )");
        $this->db->bind(':id_persona', $datos['id_persona']);
        $this->db->bind(':id_vehiculo', $datos['id_vehiculo']);
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }


    public function ObtenPersona(){
        $this->db->query("SELECT * FROM persona WHERE id_usuario");
    }


    public function EditPersona($datos){
        $this->db->query('UPDATE vehiculo SET placa = :placa, marca = :marca, modelo = :modelo, numero_puertas = :numPuertasE, tipo_vehiculo = :tiVehiculoE WHERE id = :id');

        $this->db->bind(':nombres', $datos['nombres']);
        $this->db->bind(':apellidos', $datos['apellido']);
        $this->db->bind(':fecha_nacimiento', $datos['fecha_nacimiento']);
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':profesion_oficio', $datos['profesion']);
        $this->db->bind(':es_casado', $datos['casado']);
        $this->db->bind(':ingresos_mensuales', $datos['ingreso']);
        $this->db->bind(':vehiculo_actual', $datos['vehiculo']);


        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }


    public function ElimPersona($id_persona){
        $this->db->query("DELETE FROM persona WHERE id = $id_persona");
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

 } 