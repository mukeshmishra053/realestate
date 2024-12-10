<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'property_type',
        'enquiry_message',
    ];


}
