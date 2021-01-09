<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Wishlist extends Model
{
    use HasFactory;
    
    protected $table = 'wishlists';

    protected $fillable = [
        'user_id',
        'product_id'
    ];
}
