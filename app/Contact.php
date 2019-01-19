<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone_number', 'birth_date', 'function', 'city', 'company_name', 'company_address'
    ];
}
