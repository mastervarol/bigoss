<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loket extends Model
{
	use SoftDeletes;

	/**
     * The model setting.
     */
    protected $table = 'm_loket';
    public $primaryKey = 'id_loket';
    protected $dates = ['deleted_at'];

    //relasi loket dan layanan
    public function layanan()
    {
        return $this->belongsToMany('App\Layanan', 'a_loketlayanan', 'id_loket', 'id_layanan')->withTimestamps();
    }
    //end of relasi loket dan layanan
    
    public function antrian()
    {
        return $this->hasMany('App\Antrian', 'id_loket');
    }
}
