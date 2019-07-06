<?php
require('fpdf181/fpdf.php');

class PDF extends FPDF{
	function Header(){
	    $this->SetFont('Arial','B',15);
	    $this->Cell(0,10,'Informe de Ventas',0,0,'C');
	    $this->Line(10,30,200,30);
	    $this->Ln(25);
	}

	function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Arial','I',8);
	    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);

    $pdf->Cell(35,5,'id_cliente',1,0,'C');
	$pdf->Cell(35,5,'id_producto',1,0,'C');
	$pdf->Cell(35,5,'cantidad',1,0,'C');
	$pdf->Cell(35,5,'importe',1,0,'C');
    $pdf->Cell(50,5,'fregistro',1,0,'C');
    $pdf->Ln();

foreach($this->model->Listar() as $r):
	$pdf->Cell(35,5,$r->id_cliente,1,0,'C');
	$pdf->Cell(35,5,$r->id_producto,1,0,'C');
	$pdf->Cell(35,5,$r->cantidad,1,0,'C');
	$pdf->Cell(35,5,$r->importe,1,0,'C');
    $pdf->Cell(50,5,$r->fregistro,1,0,'C');
    $pdf->Ln();
endforeach;

$pdf->Output();
?>