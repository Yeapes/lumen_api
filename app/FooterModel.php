<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterModel extends Model
{
    protected $table = 'footer';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
