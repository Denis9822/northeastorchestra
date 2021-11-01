<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "table_products";

    public function option($index)
    {
        $optionInd = explode(';',$this->ta_specs);

        if (isset($optionInd[$index])) {
            $optionInd = explode('[[',$optionInd[$index]);
            if ($optionInd=='none')
                return null;
            return $optionInd[0];
        }
        else
            return null;
    }
    public function thumbnails()
    {
        if ($this->ta_thumbnails != null) {
            $thum = explode(';', $this->ta_thumbnails);
            return $thum;
        }
        else
            return null;
    }

    public function audios()
    {
        $audios =  collect(explode(';', $this->t_audio));
        $audios = $audios->map(function ($name){
            $tt = explode('[[',$name);
            return $tt[0];
        });

        return $audios;
    }
}
