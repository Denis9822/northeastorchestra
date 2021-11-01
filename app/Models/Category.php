<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "table_categories";

    public function childCategories()
    {
         return Category::where('Category','=',$this->Category)->where('Sub_Category','<>',null)->get();
    }

}
