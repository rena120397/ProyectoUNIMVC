<?php
include('histograma-clase.php');
$histo=new histograma();

$array = json_decode(json_encode($this->model->Graficar()), True);
$ventas = array_column($array,'cantidad','id_producto');

$histo->ingresar_datos($ventas);
$histo->graficar();

?>