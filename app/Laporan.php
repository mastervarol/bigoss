<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    /**
     * The model setting.
     */
    protected $table = 'p_laporan';
    public $primaryKey = 'id_laporan';

    //rules / aturan validasi pada form
    public static $rules = array(
        'judul' => 'required|max:100',
        'laporan' => 'required'
    );

    public function pelapor()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function penanggap()
    {
    	return $this->belongsTo('App\Admin', 'tanggapan_by');
    }

    public function uploadolehadmin()
    {
    	return $this->belongsTo('App\Admin', 'created_by_admin');
    }
}
