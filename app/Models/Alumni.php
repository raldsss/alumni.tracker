<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    protected $primaryKey = 'alumni_id';
    public $timestamps = true;

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'streetAddress',
        'barangay',
        'city',
        'district',
        'province',
        'region',
        'birthdate',
        'age',
        'sex',
        'nationality',
        'civil_status',
        'email',
        'batchNumber',
        'training_status',
        'scholarship',
    ];
}
