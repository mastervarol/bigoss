<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Izin extends Model
{
    use SoftDeletes;

	/**
     * The model setting.
     */
    protected $table = 'm_izin';
    public $primaryKey = 'id_izin';
    protected $dates = ['deleted_at'];

    public function layanan()
    {
        return $this->hasMany('App\Layanan', 'id_izin');
    }
}
