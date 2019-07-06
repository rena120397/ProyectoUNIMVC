<?php
# venta.controller.php
require_once 'model/venta.php';

class VentaController{
    private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Venta();
    }
    #============
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/venta/venta.php';
        require_once 'view/footer.php';
    }
    #============
    public function Crud(){
        $alm = new Venta();
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/venta/venta-editar.php';
        require_once 'view/footer.php';
    }
    public function histograma(){
        require_once 'view/venta/histograma.php';
    }
    public function pdf(){
        require_once 'view/venta/venta-pdf.php';
    }
    #============
    public function Guardar(){
        $alm = new Venta();
        
        $alm->id = $_REQUEST['id'];
        $alm->id_cliente = $_REQUEST['id_cliente'];
        $alm->id_producto = $_REQUEST['id_producto'];
        $alm->cantidad = $_REQUEST['cantidad'];
        $alm->importe = $_REQUEST['importe'];
        
        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: red.php?c=Venta');
    }
    #============
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: red.php?c=Venta');
    }
}