<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'pro_id';
    protected $guarded = [''];

    protected $status = [
        1 => [
            'name' => 'Active',
            'class' => ''
        ],

        0 => [
            'name' => 'InActive',
            'class' => ''
        ],
    ];

    public function getStatus(){
        return Arr::get($this->status, $this->pro_active, '[N\A]');
    }

    public function image() 
    {
        return $this->hasMany('App\Models\Image');
    }

    public static function getAllProduct()
    {
        return Product::orderBy('pro_id','desc')->paginate(10);
    }

    public static function getProductBySlug($slug)
    {
        return Product::where('pro_slug', $slug)->first();
    }

}
