<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumni extends Authenticatable
{
    use Notifiable;
    protected $table = 'alumnis';
	public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'alumni_id',
        'username',
        'password',
        'retype_password',
        'name',
        'id_number',
        'gender',
        'email',
        'nationality',
        'phone',
        'qualification',
        'course',
        'graduation_year',
        'address1',
        'address2',
        'city',
        'postcode',
        'country',
        'region',
        'position',
        'company_name',
        'company_address1',
        'company_address2',
        'company_city',
        'company_postcode',
        'company_country',
        'company_region',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'    => 'datetime',
    ];


    // Constant


    // Relationships


    // Functions

}
