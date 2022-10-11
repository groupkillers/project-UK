<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AML extends Model
{
    use HasFactory;

    protected $table='amls';
    protected $primaryKey='id';
    protected $fillable=[
        'client_ID',
        'passport_proff',
        'passport_expire_date',
        'address_proff',
        'address_expire_date'
    ];
    
}
