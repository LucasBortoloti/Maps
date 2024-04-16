<?php

require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->loadHtmlFile(__DIR__ . '/maps.html');

$dompdf->render();

//$totalPages = $dompdf->get_canvas()->get_page_count();

//$canvas = $dompdf->get_canvas();
//$font = $dompdf->getFontMetrics()->get_font("Arial", "normal");
//$canvas->page_text(540, 800, "{PAGE_NUM} de $totalPages", $font, 10);

$dompdf->stream('documento.pdf', array('Attachment' => 0));
