<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Artist extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "table_artists";

    public function getDataString()
    {
        $day = Carbon::parse($this->created_at)->day;
        $mon = Carbon::parse($this->created_at)->shortMonthName;
        $year = Carbon::parse($this->created_at)->year;
        return $mon.' '.$day.', '.$year;
    }
    public function authorImage()
    {
         $author = $this->Author;
         $authorObject = Author::where('name',$author)->first();
         return $authorObject->Avatar;
    }
    public function authorBio()
    {
        $author = $this->Author;
        $authorObject = Author::where('name',$author)->first();
        return $authorObject->Bio;
    }
}
