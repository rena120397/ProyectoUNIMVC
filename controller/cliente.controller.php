<?php
# alumno.controller.php
require_once 'model/cliente.php';

class ClienteController{
    private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }
    #============
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
        require_once 'view/footer.php';
    }
    #============
    public function Crud(){
        $alm = new Cliente();
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        require_once 'view/footer.php';
    }
    #============
    public function Guardar(){
        $alm = new Cliente();
        
        $alm->id = $_REQUEST['id'];
        $alm->ruc = $_REQUEST['ruc'];
        $alm->nombre = $_REQUEST['nombre'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: red.php?c=Cliente');
    }
    #============
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: red.php?c=Cliente');
    }
}