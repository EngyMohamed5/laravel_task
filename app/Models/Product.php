<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'expiration_date',
        'details',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
