<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'price',
        'categories_id',
        'stock',
        'unit_type',
        'branch_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
