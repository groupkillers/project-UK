<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'user';
	public $timestamps = false;
	protected $primaryKey = 'user';

    protected $fillable = [
        'user_name',
        'user_password',
        'user_roal'
     ];
}
