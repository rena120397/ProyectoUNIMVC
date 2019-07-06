<?php
# alumno.controller.php
require_once 'model/producto.php';

class ProductoController{
    private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    #============
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    #============
    public function Crud(){
        $alm = new Producto();
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    #============
    public function Guardar(){
        $alm = new Producto();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->precio = $_REQUEST['precio'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: red.php?c=Producto');
    }
    #============
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: red.php?c=Producto');
    }
}