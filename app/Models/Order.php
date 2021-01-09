<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use DB;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders';
    protected $guarded = [''];

    public static function getEnumValues($column) {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM orders WHERE Field = '{$column}'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
          $v = trim( $value, "'" );
          $enum = Arr::add($enum, $v, $v);
        }
        return $enum;
      }
}
