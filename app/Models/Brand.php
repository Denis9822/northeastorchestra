<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "table_brands";

    public function image()
    {
        $item_id = explode(',',$this->Item_numbers);
        $product = Product::where('Item_number',$item_id)->first();
        return $product->ta_picture ?? '';
    }
    public function getDataString()
    {
        $day = Carbon::parse($this->updated_at)->day;
        $mon = Carbon::parse($this->updated_at)->shortMonthName;
        $year = Carbon::parse($this->updated_at)->year;
        return $mon.' '.$day.', '.$year;
    }
}
