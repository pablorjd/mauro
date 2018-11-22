<?php
class Modelo extends CI_Model  {

    function __construct() {
        parent::__construct();
        $this->load->database('aulapp_agendapp');
    }

    

    function get_user_info($user_id) {
        $query = $this->db->query("SELECT * FROM users WHERE id_estudiante = ?", array($user_id));
        return $query->row_array();
    }
    //ALUMNO METODOS
    function mensajesPorAlumno($idAlumno) {
        $query = $this->db->query("SELECT * FROM mensaje join profesor on mensaje.id_profesor = profesor.id_profesor WHERE id_estudiante =".$idAlumno);
        return $query->result();
    }
     function mensajesAlumno($idAlumno) {
        $query = $this->db->query("SELECT * FROM mensaje join profesor on mensaje.id_profesor = profesor.id_profesor WHERE id_estudiante =".$idAlumno);
        return $query->result();
    }
    
    function anunciosPorAlumno(/*$idAlumno*/) {
        $query = $this->db->query("SELECT * FROM anuncio join curso on anuncio.id_curso = curso.id_curso WHERE curso.id_curso = 1");
        return $query->result();
    }
    function citacionesPorAlumno($idAlumno) {
        $query = $this->db->query("SELECT * FROM estudiante join apoderado on estudiante.id_apoderado = apoderado.id_apoderado "
                . "join cita on apoderado.id_apoderado = cita.id_apoderado"
                . " WHERE estudiante.id_estudiante =".$idAlumno);
       
        return $query->result();
    }
    //DOCENTE METODOS
    function listaCursosAsignadosPorDocente(/*$idDocente*/) {
        $query = $this->db->query("SELECT `profesor`.*, `profesor_has_curso`.*, `curso`.* FROM `curso` LEFT JOIN `profesor_has_curso` ON `profesor_has_curso`.`id_curso` = `curso`.`id_curso` LEFT JOIN `profesor` ON `profesor_has_curso`.`id_profesor` = `profesor`.`id_profesor` Where `profesor_has_curso`.`id_profesor` = 1"/*.$idDocente*/);
        return $query->result();
    }
    /*SELECT `curso`.*, `profesor`.*, `estudiante`.*
FROM `curso`
    LEFT JOIN `estudiante` ON `estudiante`.`id_curso` = `curso`.`id_curso`
    LEFT JOIN `mensaje` ON `mensaje`.`id_estudiante` = `estudiante`.`id_estudiante`
    LEFT JOIN `profesor` ON `mensaje`.`id_profesor` = `profesor`.`id_profesor`
Where `profesor`.`id_profesor` = 1

     * SELECT `profesor_has_curso`.*, `curso`.*, `estudiante`.*
FROM `curso`
    LEFT JOIN `profesor_has_curso` ON `profesor_has_curso`.`id_curso` = `curso`.`id_curso`
    LEFT JOIN `estudiante` ON `estudiante`.`id_curso` = `curso`.`id_curso`

     * SELECT `profesor_has_curso`.*, `curso`.*, `estudiante`.*
FROM `curso`
    LEFT JOIN `profesor_has_curso` ON `profesor_has_curso`.`id_curso` = `curso`.`id_curso`
    LEFT JOIN `estudiante` ON `estudiante`.`id_curso` = `curso`.`id_curso`
Where `profesor_has_curso`.`id_profesor` = 1
     * 
     * 
     * 
     * SELECT `profesor_has_curso`.*, `curso`.*, `estudiante`.*
FROM `curso`
    LEFT JOIN `profesor_has_curso` ON `profesor_has_curso`.`id_curso` = `curso`.`id_curso`
    LEFT JOIN `estudiante` ON `estudiante`.`id_curso` = `curso`.`id_curso`
Where `profesor_has_curso`.`id_profesor` = 1
     * 
     * 
     * select * from profesor_has_curso where id_profesor = 1
     *      */
}
?>