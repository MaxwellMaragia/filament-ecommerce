<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrier extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ['name', 'slug', 'image','is_active'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
