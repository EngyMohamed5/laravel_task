<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'city',
        'company_size'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
