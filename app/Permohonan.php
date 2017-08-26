<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    /**
     * The model setting.
     */
    protected $table = 'u_permohonan';
    public $primaryKey = 'id_permohonan';

    //rules / aturan validasi pada form
    public static $rules = array(
        'alamat_rumah' => 'required|max:255',
        'telp' => 'required|max:50',
        'lokasi_bangunan' => 'required|max:255',
        'no_ajb' => 'required|max:255',
        'tgl_ajb' => 'required',
        'an_ajb' => 'required|max:100',
        'letak_ajb' => 'required|max:255',
        'luas_ajb' => 'required|numeric',
        'doc_ktp' => 'required|file',
        'doc_itr' => 'required|file',
        'doc_shm' => 'required|file',
        'doc_kuasa' => 'file'
    );

    public function pemohon()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function response_by()
    {
        return $this->belongsTo('App\Admin', 'response_by');
    }
}
