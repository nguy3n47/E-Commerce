<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'c_id';
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
        return Arr::get($this->status, $this->c_active, '[N\A]');
    }
}
