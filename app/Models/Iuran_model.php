<?php
namespace App\Models;
use CodeIgniter\Model;

class Iuran_model extends Model
{
    protected $table = 'iuran';

    public function getIuran1($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
    }

    public function getIuran($id = false)
    {
        if($id === false){
            return $this->table('iuran')
                        ->join('warga', 'warga.nik = iuran.warga_nik')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iuran')
                        ->join('warga', 'warga.nik = iuran.warga_nik')
                        ->where('iuran.id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function sumIuran()
    {
        $query = $this->db->query('SELECT sum(jumlah) FROM iuran AS total');
        return $query->$this->getRow();
    }

    public function saveIuran($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
 
}