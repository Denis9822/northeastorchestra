<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $cat;
    protected $pages;
    public function __construct()
    {
        $this->cat = Category::where('Sub_category',null)->get();
        $this->pages = Page::all();
        View::share('header_categories', $this->cat);
        View::share('pages', $this->pages);
    }
}
