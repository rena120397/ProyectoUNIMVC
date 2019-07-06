<?php
class histograma{
    public $datos;
    function ingresar_datos($entrada){
        $this->datos=$entrada;
    }
    
    function graficar(){
		$barra=25; # ancho de las barras
		$alto=200;  # escala, nota * 10 = 20* 10 =200
		$ancho=50 + $barra* count($this->datos);
		$figura=imagecreate($ancho,$alto);
			
		$ColorFondo=imagecolorallocate($figura,255,204,0);
		$ColorBlanco=imagecolorallocate($figura,255,255,255);
		$ColorFilaPar=imagecolorallocate($figura,217,0,126);
		$ColorFilaImpar=imagecolorallocate($figura,0,85,204);			
			
		imagefill($figura,0,0,$ColorFondo);
		
		$i=0; # Inicializamos el contador
		foreach($this->datos as $m=>$n){
			//esquina inicial
			$x1=25+$i*$barra;
			$y1=$alto-10*$n;
				
			//esquina final
			$x2=$x1+$barra;
			$y2=$alto;
			
			if($i%2==1){
				$ColorBarra=$ColorFilaPar;
			}else{
				$ColorBarra=$ColorFilaImpar;
			}
			
			
			imagefilledrectangle($figura,$x1,$y1,$x2,$y2,$ColorBarra);
			imagettftext($figura,9,90,$x1+15,$alto-10, $ColorBlanco, "C:\wamp64\www\php\Examen\arial.ttf", "producto $m ($n)");
			$i++;
		}
			
			header('Content-type: image/png');
			imagepng($figura);
			imagedestroy($figura);
    }
}
?>