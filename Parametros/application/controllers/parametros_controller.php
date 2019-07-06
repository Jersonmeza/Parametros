<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametros_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('parametros_model');
    }

	public function index(){
        $this->load->view('componentes/header');
        $this->load->view('parametros');
        $this->load->view('componentes/foot');
    }
    
    public function guardar(){
       $id = $_POST['id'];
       $nombre = $_POST['nombre'];
       $valor = $_POST['valor'];

       $datos=array(
           'nombre'=> $nombre,
           'valor'=> $valor
        );

        if ($nombre <> "" && $valor <> "") {
            echo $this->parametros_model->guardar($datos);
        }else{
            echo "Por favor llenar los campos";
        }
    }

    public function actualizar(){
        $id['id'] = $_POST['id'];
        $nombre = $_POST['nombre'];
        $valor = $_POST['valor'];

        $datos=array(
           'Nombre'=>$nombre,
           'Valor'=>$valor
        );
       
        if ($nombre <> "" && $valor <> "") {
            echo $this->parametros_model->actualizar($id,$datos);
        }else{
            echo "Por favor llenar los campos";
        }

    }

    public function eliminar(){
            $id = $_POST['id'];
       
        if ($id <> "") {
            echo $this->parametros_model->eliminar($id);
        }else{
            echo "Por favor llenar el campo id";
        }
    }
}
