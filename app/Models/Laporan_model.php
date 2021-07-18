<?php
namespace App\Models;
use CodeIgniter\Model;

class Laporan_model extends Model
{
    protected $table = 'iuran';

    public function getLaporan1()
    {
        return $this->db->query("SELECT sum(jumlah) AS total_jumlah from iuran");
    }

    public function getLaporan()
    {
        $builder = $this->db->query('(SELECT SUM(jumlah) FROM iuran AS total)', false);
        return $builder->get();
    }
}