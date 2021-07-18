<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Laporan_model;

class Laporan extends Controller
{
    public function index()
    {
        $model = new Laporan_model;
        $data['title'] = 'Laporan Iuran';
        $data['getLaporan'] = $model->getLaporan();
        echo view('header_view', $data);
        echo view('iuran/laporan_view', $data);
        echo view('footer_view', $data);
	}

}