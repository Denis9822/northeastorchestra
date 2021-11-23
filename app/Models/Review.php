<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Review extends Model
{
    use HasFactory;
    protected $table = "table_reviews";

    public function reviewImage()
    {
        $item_id = explode(',',$this->Item_numbers);
        $product = Product::where('Item_number',$item_id)->first();
        return $product->ta_picture ?? '';
    }

    public function getUrlCategory()
    {
        $category = Category::where('Sub_category',$this->Sub_category)->first();
        return $category->URL;
    }

    public function getDataString()
    {
        $day = Carbon::parse($this->updated_at)->day;
        $mon = Carbon::parse($this->updated_at)->shortMonthName;
        $year = Carbon::parse($this->updated_at)->year;
        return $mon.' '.$day.', '.$year;
    }
    public function authorImage()
    {
        $author = $this->Author;
        $authorObject = Author::where('name',$author)->first();
        return $authorObject->Avatar;
    }
    public function authorLink()
    {
        $author = $this->Author;
        $authorObject = Author::where('name',$author)->first();
        return $authorObject->URL;
    }
}
