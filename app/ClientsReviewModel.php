<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsReviewModel extends Model
{
    protected $table = 'clients_review';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
