<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros_model extends CI_Model {

   public function guardar($data){
     echo $this->db->insert('parametros', $data);
   }

   public function actualizar($id,$data){
       $query = $this->db->where($id);
       echo $query = $this->db->update('parametros', $data);
   }

   public function eliminar($id){
     $query = "DELETE FROM parametros WHERE id=".$id;
     echo $this->db->query($query);
     
   }
}
