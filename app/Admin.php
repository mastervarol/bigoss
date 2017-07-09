<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * The model setting.
     */
    protected $table = 'm_admin';
    public $primaryKey = 'id_admin';
}
