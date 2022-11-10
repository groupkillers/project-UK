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
        'client_id',
        'firstname',
        'lastname',
        'user_name',
        'email',
        'contact_number',
        'birthdate',
        'street_address',
        'address_line_2',
        'city',
        'state',
        'postal_code',
        'user_password',
        'user_role',
        'comments'
    ];
}
