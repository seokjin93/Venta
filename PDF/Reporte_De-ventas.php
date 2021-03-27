<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte De Ventas Diario',0,1,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


require('db.php');
$consulta = "SELECT * FROM reportes";
$resultado= $conexion->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AddFont('Roboto-Bold','','Roboto-Bold.php');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Roboto-Bold','',12);
while ($row = $resultado->fetch_assoc()){
  $pdf->Cell(30,10-5,utf8_decode('Día'),1, 0, 'C' , 0);
  $pdf->Cell(70,10-5,utf8_decode('Cliente'),1, 0, 'C' , 0);
  $pdf->Cell(48,10-5,utf8_decode('Producto'),1, 0, 'C' , 0);
  $pdf->Cell(48,10-5,utf8_decode('Precio'),1, 1, 'C' , 0);
  $pdf->Cell(30,10,$row['Día'],0, 0, 'C' , 0);
  $pdf->Cell(70,10,$row['Cliente'],0, 0, 'C' , 0);
  $pdf->Cell(48,10,$row['Producto'],0, 0, 'C' , 0);
  $pdf->Cell(48,10,$row['Precio'],0, 1, 'C' , 0);
}


$pdf->Output();
?>
