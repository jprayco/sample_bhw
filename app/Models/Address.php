<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Individuals;

class Address extends Model
{
    use HasFactory;

    protected $fillable=[
        'house_no',
        'street',
    ];

    public function individual(){
        return $this->hasMany(Individuals::class, 'address_id');
    }

}
