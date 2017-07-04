<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layanan extends Model
{
    use SoftDeletes;

	/**
     * The model setting.
     */
    protected $table = 'm_layanan';
    public $primaryKey = 'id_layanan';
    protected $dates = ['deleted_at'];

    public function izin()
    {
        return $this->belongsTo('App\Izin', 'id_izin');
    }

    //relasi loket dan layanan
    public function loket()
    {
        return $this->belongsToMany('App\Loket', 'a_loketlayanan', 'id_layanan', 'id_loket')->withTimestamps();
    }
    //end of relasi loket dan layanan

    public function antrian()
    {
        return $this->hasMany('App\Antrian', 'id_layanan');
    }
}
