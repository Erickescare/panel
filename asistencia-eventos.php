<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
require_once ('inc/dompdf/autoload.inc.php');

// reference the Dompdf namespace
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Courier');



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();