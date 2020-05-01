<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('assets/vendor/dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class Mypdf
{
    public $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function generate($view, $data = array(), $filename = 'Formulir', $orientation = 'potrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);
        $dompdf->loadHtml($html);

        // set custom paper ukuran F4
        // $dompdf->setPaper('F4', $orientation);
        $customPaper = array(0, 0, 612, 936);
        $dompdf->set_paper($customPaper, $orientation);

        // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper(A4, $orientation);

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
    }
}
