<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    /**
     * The model setting.
     */
    protected $table = 'a_antrian';
    public $primaryKey = 'id_antrian';

    public function pemohon()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function loket()
    {
        return $this->belongsTo('App\Loket', 'id_loket');
    }

    public function layanan()
    {
        return $this->belongsTo('App\Layanan', 'id_layanan');
    }
}
