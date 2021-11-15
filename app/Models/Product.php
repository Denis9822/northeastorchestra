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

    public function option()
    {
        $optionInd =  collect(explode(';', $this->ta_specs));

        $options = $optionInd->map(function ($name){

            $name = substr($name,0,strlen($name)-2);
            $tt = explode('[[',$name);
            return $tt;
        });

        return $options;
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

            $name = substr($name,0,strlen($name)-2);
            $tt = explode('[[',$name);
            return $tt;
        });

        return $audios;
    }

    public function productLinks($title)
    {
        $id = $this->Item_number.',';
        $links = Review::where('Item_numbers','like',$id."%")->where('Title','<>',$title)->take(3)->get();
        return $links;
    }

    public function brandLinks($brand)
    {
        $id = $this->Item_number.',';
        $links = Brand::where('Item_numbers','like',$id."%")->where('Brand','<>',$brand)->take(3)->get();
        return $links;
    }
}
