<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class Report_barang extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('pdf');
    }
    public function baranglap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA BARANG', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(37, 6, 'BARCODE', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NAMA BARANG', 1, 0, 'C');
        $pdf->Cell(30, 6, 'HARGA JUAL', 1, 0, 'C');
        $pdf->Cell(30, 6, 'HARGA BELI', 1, 0, 'C');
        $pdf->Cell(20, 6, 'STOK', 1, 0, 'C');
        $i = 1;
        $data = $this->db->get('barang')->result_array();
        foreach($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(37, 6, $d['barcode'], 1, 0);
            $pdf->Cell(37, 6, $d['name'], 1, 0);
            $pdf->Cell(30, 6, $d['harga_jual'], 1, 0);
            $pdf->Cell(30, 6, $d['harga_beli'], 1, 0);
            $pdf->Cell(20, 6, $d['stok_barang'], 1, 0);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_barang.pdf', 'I');
    }
}