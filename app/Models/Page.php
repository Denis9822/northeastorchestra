<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Page extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "table_pages";
}
