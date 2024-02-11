<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individuals extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'bday',
        'contact_no',
        'civil_status_id',
        'pwd_categories_id',
        'lgbt_category_id',
        'address_id',
        'family_code',
        'status'
    ];

    public function home_address(){
        return $this->belongsTo(Address::class, 'address_id','id');
    }
}
