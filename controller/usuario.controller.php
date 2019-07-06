<?php
# alumno.controller.php
require_once 'model/usuario.php';

class UsuarioController{
    private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }

    public function Index(){
        $alm = new Usuario();
        if(isset($_REQUEST['login'])&& isset($_REQUEST['password'])){
            $alm = $this->model->Obtener($_REQUEST['login'],$_REQUEST['password']);
            if($alm>0){
                header('Location: principal.php');
            }else 
                header('Location: index.php');
        }else{
            header('Location: index.php');
        } 
    }


}