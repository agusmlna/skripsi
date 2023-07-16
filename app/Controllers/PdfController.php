<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrderModel;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    protected $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
    public function index()
    {
        return view('Order/downloadpdfpenjualan');
    }

    public function generate()
    {
        $data = [
            'orders' => $this->orderModel->getOrdersbystatus()
        ];
        $filename = date('y-m-d-H-i-s') . '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Order/downloadpdfpenjualan', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
